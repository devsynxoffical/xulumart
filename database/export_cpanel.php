<?php

$host = '127.0.0.1';
$db   = 'xulumart_db';
$user = 'xulumart_dbuser';
$pass = 'Xulu@DB2024!';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

$tables = [];
$stmt = $pdo->query('SHOW FULL TABLES WHERE Table_type = "BASE TABLE"');
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    $tables[] = $row[0];
}

$sqlDump = "-- Xulumart cPanel Ready Database Export\n";
$sqlDump .= "-- Generated: " . date('Y-m-d H:i:s') . "\n";
$sqlDump .= "-- Compatible with MySQL 5.7, 8.0, MariaDB\n\n";
$sqlDump .= "SET FOREIGN_KEY_CHECKS=0;\n";
$sqlDump .= "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\n";
$sqlDump .= "SET time_zone = \"+00:00\";\n\n";

foreach ($tables as $table) {
    $sqlDump .= "-- --------------------------------------------------------\n";
    $sqlDump .= "-- Table structure for table `$table`\n";
    $sqlDump .= "-- --------------------------------------------------------\n\n";
    $sqlDump .= "DROP TABLE IF EXISTS `$table`;\n";

    $createTableStmt = $pdo->query("SHOW CREATE TABLE `$table`")->fetch(PDO::FETCH_ASSOC);
    $sqlDump .= $createTableStmt['Create Table'] . ";\n\n";

    $rows = $pdo->query("SELECT * FROM `$table`")->fetchAll();
    if (count($rows) > 0) {
        $sqlDump .= "-- Dumping data for table `$table`\n\n";
        $columns = array_keys($rows[0]);
        $columnsEscaped = array_map(function($c) { return "`$c`"; }, $columns);

        $chunks = array_chunk($rows, 100);
        foreach ($chunks as $chunk) {
            $sqlDump .= "INSERT INTO `$table` (" . implode(', ', $columnsEscaped) . ") VALUES\n";
            $valRows = [];
            foreach ($chunk as $row) {
                $escapedValues = [];
                foreach ($columns as $col) {
                    $val = $row[$col];
                    if ($val === null) {
                        $escapedValues[] = 'NULL';
                    } else {
                        $escapedValues[] = $pdo->quote($val);
                    }
                }
                $valRows[] = "(" . implode(', ', $escapedValues) . ")";
            }
            $sqlDump .= implode(",\n", $valRows) . ";\n";
        }
        $sqlDump .= "\n";
    }
}

$sqlDump .= "SET FOREIGN_KEY_CHECKS=1;\n";

file_put_contents(__DIR__ . '/xulumart_live_cpanel.sql', $sqlDump);
echo "Successfully exported " . count($tables) . " tables to " . __DIR__ . "/xulumart_live_cpanel.sql (" . strlen($sqlDump) . " bytes)\n";
