@echo off
echo ================================================
echo Restarting Apache to Load PostgreSQL Extensions
echo ================================================
echo.

echo Stopping Apache...
net stop Apache2.4
timeout /t 2 /nobreak >nul

echo Starting Apache...
net start Apache2.4

echo.
echo ================================================
echo Apache Restarted Successfully!
echo ================================================
echo.
echo You can now try logging in again at:
echo http://localhost/online-clothing-store/Online%%20Clothing%%20Store/login.php
echo.
echo Login credentials:
echo Username: admin
echo Password: admin123
echo Type: Admin
echo.
pause
