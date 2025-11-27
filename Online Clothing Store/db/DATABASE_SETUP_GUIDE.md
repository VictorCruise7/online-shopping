# 🗄️ Database Setup Complete!

I've created the database schema for your Online Clothing Store. Here's what you need to do:

## ✅ What I Created

### 1. **Database Schema File** 
   - Location: `db/setup_database.sql`
   - Contains all table structures and sample data

### 2. **Setup Instructions**
   - Location: `db/README.md`
   - Detailed installation guide

## 📋 Database Structure

### Tables Created:
1. **Customer_Registration** - Customer accounts
2. **Admin_Master** - Admin accounts  
3. **Category_Master** - Product categories
4. **item_master** - Products/items
5. **Offer_Master** - Special offers

### Default Data Included:
- ✅ Admin account (username: `admin`, password: `admin123`)
- ✅ 3 sample categories (Jeans, Blazers, T-Shirts)
- ✅ 6 sample products
- ✅ 3 promotional offers

## ⚠️ MySQL Not Detected

MySQL is not currently installed on your system. You have two options:

### Option 1: Install MySQL (Recommended)

1. **Download MySQL**:
   - Visit: https://dev.mysql.com/downloads/installer/
   - Download "MySQL Installer for Windows"
   - Choose "mysql-installer-community" version

2. **Install MySQL**:
   - Run the installer
   - Choose "Developer Default" or "Server only"
   - Set a root password (remember this!)
   - Complete the installation

3. **Run the Database Setup**:
   ```bash
   cd "c:\Users\LENOVO\Desktop\online-clothing-store\Online Clothing Store\db"
   mysql -u root -p < setup_database.sql
   ```

### Option 2: Use XAMPP (Easier for Beginners)

1. **Download XAMPP**:
   - Visit: https://www.apachefriends.org/
   - Download XAMPP for Windows
   - Install it (includes MySQL, PHP, and phpMyAdmin)

2. **Start MySQL**:
   - Open XAMPP Control Panel
   - Click "Start" next to MySQL

3. **Import Database**:
   - Open browser: `http://localhost/phpmyadmin`
   - Click "Import" tab
   - Choose `setup_database.sql`
   - Click "Go"

## 🔧 After Installation

1. **Update Database Connection** (if you set a MySQL password):
   - Open: `Connections/shop.php`
   - Update the password:
     ```php
     $password_shop = "your_mysql_password";
     ```

2. **Test the Website**:
   - Navigate to: `http://localhost:8000/login.php`
   - Try logging in with:
     - Username: `admin`
     - Password: `admin123`
     - User Type: Admin

3. **Register a New Customer**:
   - Click "Register here" on login page
   - Fill out the registration form
   - Try logging in with your new account

## 📁 Files Created

- `db/setup_database.sql` - Complete database schema
- `db/README.md` - Detailed setup instructions
- `db/DATABASE_SETUP_GUIDE.md` - This guide

## 🎯 Next Steps

1. Install MySQL or XAMPP
2. Run the database setup script
3. Test login and registration
4. Start using your online clothing store!

## 💡 Need Help?

If you encounter any issues:
- Check that MySQL is running
- Verify your database credentials in `Connections/shop.php`
- Make sure the PHP server is running (`php -S localhost:8000`)

Your database is ready to go once MySQL is installed! 🚀
