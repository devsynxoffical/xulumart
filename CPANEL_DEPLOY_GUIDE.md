# 🚀 Xulumart - Complete cPanel 1-Click Deployment Guide

This zip package contains everything needed to run **Xulumart** live on cPanel hosting out-of-the-box.

---

## 📋 Step-by-Step Quick Deployment (Takes < 3 Minutes)

### Step 1: Upload and Extract Zip on cPanel
1. Log in to your **cPanel** account.
2. Open **File Manager** and navigate into the `public_html` folder (or your subdomain folder).
3. Click **Upload** and upload `xulumart-cpanel-ready.zip`.
4. Right-click the uploaded zip file and click **Extract**.
   *(All files will extract directly into your public_html)*

---

### Step 2: Create Database in cPanel
1. In cPanel, go to **MySQL® Databases** (or **MySQL Database Wizard**).
2. **Create New Database**: e.g. `cpaneluser_xulumart`.
3. **Create New User**: e.g. `cpaneluser_dbuser` with a strong password (e.g. `Xulu@Live2026!`).
4. **Add User To Database**: Select the user and database, check **ALL PRIVILEGES**, and click **Make Changes**.

---

### Step 3: Import Database (1-Click in phpMyAdmin)
1. In cPanel, open **phpMyAdmin**.
2. Click on your newly created database (e.g. `cpaneluser_xulumart`) from the left menu.
3. Click the **Import** tab at the top.
4. Click **Choose File** and select:
   `database/xulumart_live_cpanel.sql` (found inside the extracted folder).
5. Click **Import / Go** at the bottom.
   *(All 49 tables, categories, seeded authentic products, settings, and admin accounts will be imported instantly)*

---

### Step 4: Configure Your `.env` File
1. In cPanel **File Manager** (make sure **"Show Hidden Files (dotfiles)"** is enabled in Settings at the top right).
2. Locate the `.env` file (or rename `.env.production` to `.env`).
3. Click **Edit** and update these lines:
   ```dotenv
   APP_NAME="Xulumart"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_cpanel_db_name
   DB_USERNAME=your_cpanel_db_user
   DB_PASSWORD=your_cpanel_db_password
   ```
4. Click **Save Changes**.

---

### Step 5: Verify PHP Version
1. In cPanel, go to **Select PHP Version** (or **MultiPHP Manager**).
2. Set your PHP version to **PHP 8.2** (or **PHP 8.1**).
3. Ensure standard extensions are enabled: `pdo_mysql`, `fileinfo`, `gd` (or `imagick`), `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `curl`.

---

## 🔑 Default Admin Login Credentials
- **Admin Panel URL**: `https://yourdomain.com/home` (or `https://yourdomain.com/login`)
- **Email**: `admin@gmail.com`
- **Password**: `12345678`

---

## 💡 Troubleshooting / Help
- **CSS / Images Not Loading?**
  The included `.htaccess` and `index.php` are configured to automatically route requests and serve assets directly. Ensure `.htaccess` was uploaded and extracted properly.
- **500 Internal Server Error?**
  Double-check your database credentials in `.env` and verify permissions for `storage/` and `bootstrap/cache/` are set to `755` (or `777`).
