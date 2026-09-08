# 🚀 Xulumart - Hostinger hPanel 1-Click Deployment Guide

Follow this simple, step-by-step guide to make **Xulumart** live on Hostinger using **hPanel** in less than 5 minutes.

---

## 📦 What You Have Ready
You have a complete pre-configured package:
- 📁 **Archive**: `/Users/hassan/Downloads/xulumart-cpanel-ready.zip` (contains the entire app, `vendor/` pre-installed, dual-path `index.php`, `.htaccess`, and assets).
- 🗄️ **Database Export**: `database/xulumart_hostinger_db.sql` (49 tables, categories, authentic seeded products, admin accounts, and settings).

---

## 📋 Step-by-Step Hostinger Deployment Instructions

### 1️⃣ Step 1: Upload and Extract Files in hPanel File Manager
1. Log in to your **Hostinger Account** and go to **hPanel** (`https://hpanel.hostinger.com`).
2. Under **Websites**, click **Manage** on your domain.
3. In the left sidebar or dashboard, click **File Manager** &rarr; select **Files of your domain**.
4. Double-click to open the `public_html` directory.
5. In the top toolbar, click the **Upload** icon &rarr; select **File** &rarr; choose `/Users/hassan/Downloads/xulumart-cpanel-ready.zip`.
6. Once uploaded, right-click `xulumart-cpanel-ready.zip` &rarr; click **Extract** &rarr; set destination to `.` (current folder `/public_html`).
7. Click **Extract**. *(You can delete the zip file after extraction to save disk space)*.

---

### 2️⃣ Step 2: Create MySQL Database & User in Hostinger
1. In hPanel, go to **Databases** &rarr; **Management** (or search "Databases" in the hPanel search bar).
2. Under **Create a New MySQL Database and Database User**:
   - **MySQL Database Name**: e.g., `xulumart` *(Hostinger will prefix it, e.g., `u123456789_xulumart`)*
   - **MySQL Username**: e.g., `dbuser` *(Hostinger will prefix it, e.g., `u123456789_dbuser`)*
   - **Password**: Enter a strong password (e.g., `Xulu@Live2026!`).
3. Click **Create**.
4. **Copy the generated full database name and username** (e.g., `u123456789_xulumart` and `u123456789_dbuser`).

---

### 3️⃣ Step 3: Import Database in phpMyAdmin (1 Click)
1. On the same **Databases** page in hPanel, scroll down to the **List of Current Databases**.
2. Click **Enter phpMyAdmin** next to your newly created database.
3. In phpMyAdmin, click your database name on the left sidebar.
4. Click the **Import** tab in the top menu.
5. Click **Choose File** and select `database/xulumart_hostinger_db.sql` (or `database/xulumart_live_cpanel.sql`).
6. Click **Go / Import** at the bottom.
   *(All 49 tables, products, categories, images, and admin settings will be imported instantly!)*

---

### 4️⃣ Step 4: Configure the `.env` File in File Manager
1. Go back to **File Manager** inside `public_html`.
2. Locate the `.env` file (if dotfiles are hidden, click Settings at the bottom left &rarr; enable "Show Hidden Files").
3. Double-click or right-click `.env` &rarr; **Edit**.
4. Update the database credentials and website URL:
   ```dotenv
   APP_NAME="Xulumart"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=u123456789_xulumart
   DB_USERNAME=u123456789_dbuser
   DB_PASSWORD=YourPasswordHere!
   ```
5. Click **Save & Close**.

---

### 5️⃣ Step 5: Verify PHP Version & Extensions in Hostinger
1. In hPanel, go to **Advanced** &rarr; **PHP Configuration**.
2. Set **PHP Version** to **PHP 8.2** (or **PHP 8.1**) and click **Update**.
3. Under the **PHP Extensions** tab, verify standard extensions are checked (Hostinger enables them by default):
   - `pdo_mysql`
   - `fileinfo`
   - `gd` / `imagick`
   - `mbstring`
   - `openssl`
   - `tokenizer`
   - `xml`
   - `curl`
   - `bcmath`

---

## 🔑 Admin Login Credentials
- **Admin Dashboard URL**: `https://yourdomain.com/home` (or `https://yourdomain.com/login`)
- **Email**: `admin@gmail.com`
- **Password**: `12345678`

---

## 🛠️ Helpful Hostinger Tips
- **SSL / HTTPS**: In hPanel, go to **Security** &rarr; **SSL** &rarr; click **Install SSL** (Free Lifetime Let's Encrypt SSL provided by Hostinger).
- **File Permissions**: In File Manager, ensure `storage/` and `bootstrap/cache/` have permissions set to `0755`.
