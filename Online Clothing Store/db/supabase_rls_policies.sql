-- =============================================
-- Supabase Row Level Security (RLS) Policies
-- Online Clothing Store
-- =============================================

-- IMPORTANT: This script sets up RLS policies for direct database connection
-- Since you're using postgres user (not Supabase Auth), we'll create permissive policies

-- =============================================
-- ENABLE ROW LEVEL SECURITY ON ALL TABLES
-- =============================================

ALTER TABLE "Customer_Registration" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Admin_Master" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Category_Master" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Item_Master" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Offer_Master" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Shopping_Cart" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Shopping_Cart_Final" ENABLE ROW LEVEL SECURITY;
ALTER TABLE "Feedback_Master" ENABLE ROW LEVEL SECURITY;

-- =============================================
-- CUSTOMER_REGISTRATION POLICIES
-- =============================================

-- Allow authenticated users to read all customer records
CREATE POLICY "Allow authenticated read on Customer_Registration"
ON "Customer_Registration"
FOR SELECT
TO authenticated
USING (true);

-- Allow authenticated users to insert new customers (registration)
CREATE POLICY "Allow authenticated insert on Customer_Registration"
ON "Customer_Registration"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to update customer records
CREATE POLICY "Allow authenticated update on Customer_Registration"
ON "Customer_Registration"
FOR UPDATE
TO authenticated
USING (true)
WITH CHECK (true);

-- Allow service_role full access (for backend operations)
CREATE POLICY "Allow service_role all on Customer_Registration"
ON "Customer_Registration"
FOR ALL
TO service_role
USING (true)
WITH CHECK (true);

-- =============================================
-- ADMIN_MASTER POLICIES
-- =============================================

-- Allow authenticated users to read admin records (for login)
CREATE POLICY "Allow authenticated read on Admin_Master"
ON "Admin_Master"
FOR SELECT
TO authenticated
USING (true);

-- Allow authenticated users to insert admin records
CREATE POLICY "Allow authenticated insert on Admin_Master"
ON "Admin_Master"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to update admin records
CREATE POLICY "Allow authenticated update on Admin_Master"
ON "Admin_Master"
FOR UPDATE
TO authenticated
USING (true)
WITH CHECK (true);

-- Allow authenticated users to delete admin records
CREATE POLICY "Allow authenticated delete on Admin_Master"
ON "Admin_Master"
FOR DELETE
TO authenticated
USING (true);

-- Allow service_role full access
CREATE POLICY "Allow service_role all on Admin_Master"
ON "Admin_Master"
FOR ALL
TO service_role
USING (true)
WITH CHECK (true);

-- =============================================
-- CATEGORY_MASTER POLICIES
-- =============================================

-- Allow public read access to categories
CREATE POLICY "Allow public read on Category_Master"
ON "Category_Master"
FOR SELECT
TO public
USING (true);

-- Allow authenticated users to insert categories
CREATE POLICY "Allow authenticated insert on Category_Master"
ON "Category_Master"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to update categories
CREATE POLICY "Allow authenticated update on Category_Master"
ON "Category_Master"
FOR UPDATE
TO authenticated
USING (true)
WITH CHECK (true);

-- Allow authenticated users to delete categories
CREATE POLICY "Allow authenticated delete on Category_Master"
ON "Category_Master"
FOR DELETE
TO authenticated
USING (true);

-- =============================================
-- ITEM_MASTER POLICIES
-- =============================================

-- Allow public read access to items/products
CREATE POLICY "Allow public read on Item_Master"
ON "Item_Master"
FOR SELECT
TO public
USING (true);

-- Allow authenticated users to insert items
CREATE POLICY "Allow authenticated insert on Item_Master"
ON "Item_Master"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to update items
CREATE POLICY "Allow authenticated update on Item_Master"
ON "Item_Master"
FOR UPDATE
TO authenticated
USING (true)
WITH CHECK (true);

-- Allow authenticated users to delete items
CREATE POLICY "Allow authenticated delete on Item_Master"
ON "Item_Master"
FOR DELETE
TO authenticated
USING (true);

-- =============================================
-- OFFER_MASTER POLICIES
-- =============================================

-- Allow public read access to offers
CREATE POLICY "Allow public read on Offer_Master"
ON "Offer_Master"
FOR SELECT
TO public
USING (true);

-- Allow authenticated users to insert offers
CREATE POLICY "Allow authenticated insert on Offer_Master"
ON "Offer_Master"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to update offers
CREATE POLICY "Allow authenticated update on Offer_Master"
ON "Offer_Master"
FOR UPDATE
TO authenticated
USING (true)
WITH CHECK (true);

-- Allow authenticated users to delete offers
CREATE POLICY "Allow authenticated delete on Offer_Master"
ON "Offer_Master"
FOR DELETE
TO authenticated
USING (true);

-- =============================================
-- SHOPPING_CART POLICIES
-- =============================================

-- Allow authenticated users full access to shopping cart
CREATE POLICY "Allow authenticated all on Shopping_Cart"
ON "Shopping_Cart"
FOR ALL
TO authenticated
USING (true)
WITH CHECK (true);

-- =============================================
-- SHOPPING_CART_FINAL POLICIES
-- =============================================

-- Allow authenticated users full access to final cart
CREATE POLICY "Allow authenticated all on Shopping_Cart_Final"
ON "Shopping_Cart_Final"
FOR ALL
TO authenticated
USING (true)
WITH CHECK (true);

-- =============================================
-- FEEDBACK_MASTER POLICIES
-- =============================================

-- Allow authenticated users to read all feedback
CREATE POLICY "Allow authenticated read on Feedback_Master"
ON "Feedback_Master"
FOR SELECT
TO authenticated
USING (true);

-- Allow authenticated users to insert feedback
CREATE POLICY "Allow authenticated insert on Feedback_Master"
ON "Feedback_Master"
FOR INSERT
TO authenticated
WITH CHECK (true);

-- Allow authenticated users to delete feedback
CREATE POLICY "Allow authenticated delete on Feedback_Master"
ON "Feedback_Master"
FOR DELETE
TO authenticated
USING (true);

-- =============================================
-- GRANT PERMISSIONS TO AUTHENTICATED ROLE
-- =============================================

-- Grant usage on all sequences (for SERIAL columns)
GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO authenticated;
GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO anon;

-- Grant table permissions
GRANT ALL ON "Customer_Registration" TO authenticated;
GRANT ALL ON "Admin_Master" TO authenticated;
GRANT ALL ON "Category_Master" TO authenticated;
GRANT ALL ON "Item_Master" TO authenticated;
GRANT ALL ON "Offer_Master" TO authenticated;
GRANT ALL ON "Shopping_Cart" TO authenticated;
GRANT ALL ON "Shopping_Cart_Final" TO authenticated;
GRANT ALL ON "Feedback_Master" TO authenticated;

-- Grant read-only to public for products and categories
GRANT SELECT ON "Category_Master" TO anon;
GRANT SELECT ON "Item_Master" TO anon;
GRANT SELECT ON "Offer_Master" TO anon;

-- =============================================
-- NOTES
-- =============================================

-- These policies allow:
-- 1. Public (unauthenticated) users to browse products, categories, and offers
-- 2. Authenticated users (via direct database connection) to perform all operations
-- 3. Service role to have full access for administrative tasks

-- Since you're using direct database connection with postgres user,
-- your application will connect as 'authenticated' role and have full access.

-- To verify policies are working, run:
-- SELECT tablename, policyname FROM pg_policies WHERE schemaname = 'public';
