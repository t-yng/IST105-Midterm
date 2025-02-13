#!/bin/sh
sudo dnf update -y

# Install Python3
echo ""
echo "Start Install Python: "
sudo dnf install python3 -y
python3 --version

# Install PHP
echo ""
echo "Start Install PHP: "
sudo dnf install php php-cli php-common php-fpm php-mysqlnd -y
php -v

# Install Apache
echo ""
echo "Start Install Apache: "
sudo dnf install httpd -y
echo "Start Web Server: "
sudo systemctl start httpd
