# 1. Base Image: Start with a stable PHP image that includes Apache
FROM php:8.2-apache

# 2. Install Dependencies: Install the PostgreSQL extension (pdo_pgsql)
#    This allows your PHP code to connect to Supabase/Render Postgres
RUN docker-php-ext-install pdo pdo_pgsql

# 3. Copy Code: Copy your application files from your GitHub repo 
#    into the web server's default document root
COPY . /var/www/html/

# 4. Expose Port: Inform Docker that the container runs on port 80 (standard HTTP)
EXPOSE 80

# 5. Start Command: The default command starts the Apache server
#    This command automatically runs when the container starts
CMD ["apache2-foreground"]
