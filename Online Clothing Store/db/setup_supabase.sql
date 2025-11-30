-- =============================================
-- Online Clothing Store Database Schema (PostgreSQL/Supabase)
-- Database: shopping
-- =============================================

-- Table: Customer_Registration
CREATE TABLE IF NOT EXISTS "Customer_Registration" (
    "CustomerId" SERIAL PRIMARY KEY,
    "CustomerName" VARCHAR(100) NOT NULL,
    "Address" TEXT NOT NULL,
    "City" VARCHAR(50) NOT NULL,
    "Email" VARCHAR(100) NOT NULL UNIQUE,
    "Mobile" VARCHAR(10) NOT NULL,
    "Gender" VARCHAR(10) NOT NULL,
    "BirthDate" DATE,
    "UserName" VARCHAR(50) NOT NULL UNIQUE,
    "Password" VARCHAR(255) NOT NULL,
    "CreatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "UpdatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: Admin_Master
CREATE TABLE IF NOT EXISTS "Admin_Master" (
    "AdminId" SERIAL PRIMARY KEY,
    "UserName" VARCHAR(50) NOT NULL UNIQUE,
    "Password" VARCHAR(255) NOT NULL,
    "FullName" VARCHAR(100),
    "Email" VARCHAR(100),
    "CreatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "UpdatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: Category_Master
CREATE TABLE IF NOT EXISTS "Category_Master" (
    "CategoryId" SERIAL PRIMARY KEY,
    "CategoryName" VARCHAR(100) NOT NULL,
    "Description" TEXT,
    "Image" VARCHAR(255),
    "CreatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "UpdatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: item_master
CREATE TABLE IF NOT EXISTS "item_master" (
    "ItemId" SERIAL PRIMARY KEY,
    "CategoryId" INTEGER NOT NULL,
    "ItemName" VARCHAR(100) NOT NULL,
    "Description" TEXT,
    "Size" VARCHAR(20),
    "Image" VARCHAR(255),
    "Price" DECIMAL(10, 2) NOT NULL,
    "Discount" DECIMAL(5, 2) DEFAULT 0,
    "Total" DECIMAL(10, 2) NOT NULL,
    "Stock" INTEGER DEFAULT 0,
    "CreatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "UpdatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY ("CategoryId") REFERENCES "Category_Master"("CategoryId") ON DELETE CASCADE
);

-- Table: Offer_Master
CREATE TABLE IF NOT EXISTS "Offer_Master" (
    "OfferId" SERIAL PRIMARY KEY,
    "Offer" VARCHAR(200) NOT NULL,
    "Detail" TEXT,
    "Valid" DATE,
    "CreatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "UpdatedAt" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Default Admin Account
INSERT INTO "Admin_Master" ("UserName", "Password", "FullName", "Email") 
VALUES ('admin', 'admin123', 'System Administrator', 'admin@clothingstore.com')
ON CONFLICT ("UserName") DO NOTHING;

-- Insert Sample Categories
INSERT INTO "Category_Master" ("CategoryName", "Description", "Image") VALUES
('Jeans', 'Premium denim collection with latest styles and fits', 'jeans.jpg'),
('Blazers', 'Professional and stylish blazers for every occasion', 'blazers.jpg'),
('T-Shirts', 'Comfortable and trendy t-shirts for casual wear', 'tshirts.jpg');

-- Insert Sample Products
INSERT INTO "item_master" ("CategoryId", "ItemName", "Description", "Size", "Image", "Price", "Discount", "Total", "Stock") VALUES
(1, 'Classic Blue Jeans', 'Comfortable slim-fit blue jeans', 'M', 'jeans1.jpg', 59.99, 10, 53.99, 50),
(1, 'Black Denim Jeans', 'Stylish black denim with stretch', 'L', 'jeans2.jpg', 64.99, 15, 55.24, 30),
(2, 'Navy Business Blazer', 'Professional navy blazer for office', 'M', 'blazer1.jpg', 129.99, 20, 103.99, 20),
(2, 'Gray Casual Blazer', 'Versatile gray blazer for any occasion', 'L', 'blazer2.jpg', 119.99, 10, 107.99, 25),
(3, 'White Cotton T-Shirt', 'Premium cotton basic tee', 'M', 'tshirt1.jpg', 24.99, 0, 24.99, 100),
(3, 'Graphic Print T-Shirt', 'Trendy graphic design tee', 'L', 'tshirt2.jpg', 29.99, 5, 28.49, 75);

-- Insert Sample Offers
INSERT INTO "Offer_Master" ("Offer", "Detail", "Valid") VALUES
('Summer Sale', 'Get up to 50% off on all summer collection', '2025-12-31'),
('New Customer Discount', 'First-time buyers get 20% off on first purchase', '2025-12-31'),
('Free Shipping', 'Free shipping on orders above $50', '2025-12-31');
