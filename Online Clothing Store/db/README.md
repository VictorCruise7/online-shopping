# Database Setup Instructions

## Prerequisites
- MySQL Server installed and running
- MySQL command-line client or phpMyAdmin

## Quick Setup

### Option 1: Using MySQL Command Line

1. **Open Command Prompt** and navigate to the database folder:
   ```bash
   cd "c:\Users\LENOVO\Desktop\online-clothing-store\Online Clothing Store\db"
   ```

2. **Run the SQL script**:
   ```bash
   mysql -u root -p < setup_database.sql
   ```
   
3. **Enter your MySQL root password** when prompted

### Option 2: Using phpMyAdmin

1. Open phpMyAdmin in your browser (usually `http://localhost/phpmyadmin`)
2. Click on the **Import** tab
3. Click **Choose File** and select `setup_database.sql`
4. Click **Go** to execute the script

### Option 3: Using MySQL Workbench

1. Open MySQL Workbench
2. Connect to your MySQL server
3. Go to **File** → **Open SQL Script**
4. Select `setup_database.sql`
5. Click the **Execute** button (lightning bolt icon)

## What Gets Created

### Database
- **Name**: `shopping`

### Tables

1. **Customer_Registration**
   - Stores customer account information
   - Fields: CustomerId, CustomerName, Address, City, Email, Mobile, Gender, BirthDate, UserName, Password

2. **Admin_Master**
   - Stores admin account information
   - Fields: AdminId, UserName, Password, FullName, Email
   - **Default Admin**: Username: `admin`, Password: `admin123`

3. **Category_Master**
   - Stores product categories
   - Fields: CategoryId, CategoryName, Description, Image
   - **Sample Categories**: Jeans, Blazers, T-Shirts

4. **item_master**
   - Stores product information
   - Fields: ItemId, CategoryId, ItemName, Description, Size, Image, Price, Discount, Total, Stock
   - **Sample Products**: 6 sample products across 3 categories

5. **Offer_Master**
   - Stores special offers
   - Fields: OfferId, Offer, Detail, Valid
   - **Sample Offers**: 3 promotional offers

## Default Login Credentials

### Admin Account
- **Username**: `admin`
- **Password**: `admin123`

> ⚠️ **Important**: Change the admin password after first login!

## Verify Installation

After running the script, you can verify the setup:

```sql
USE shopping;
SHOW TABLES;
SELECT * FROM Admin_Master;
SELECT * FROM Category_Master;
SELECT * FROM item_master;
```

## Troubleshooting

### Error: "Access denied for user 'root'@'localhost'"
- Make sure MySQL server is running
- Check your MySQL root password
- Update the connection details in `Connections/shop.php` if needed

### Error: "Database already exists"
- The script uses `CREATE DATABASE IF NOT EXISTS`, so it's safe to run multiple times
- Existing data will be preserved

### Connection Issues in PHP
- Check `Connections/shop.php` and update:
  ```php
  $hostname_shop = "localhost";
  $database_shop = "shopping";
  $username_shop = "root";
  $password_shop = ""; // Add your MySQL password here
  ```

## Next Steps

1. ✅ Run the database setup script
2. ✅ Verify tables are created
3. ✅ Test login with admin credentials
4. ✅ Try registering a new customer account
5. ✅ Browse products and categories

Your online clothing store is now ready to use! 🎉
