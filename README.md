# Update the package index:
```
sudo apt update
```
# Install PHP and Apache (or Nginx, if you prefer):
```
sudo apt install php libapache2-mod-php
```
# After installation, restart Apache for the changes to take effect:
```
sudo systemctl restart apache2
```
After installing PHP, you can test if it's working correctly by creating a PHP file in your web server's document root directory (usually /var/www/html or /var/www)

Then, access this file through a web browser (e.g., http://localhost/index.php). If PHP is installed properly, you should see a page displaying PHP information

# TO run as docker container:
```
docker build -t simple-php-app .
docker run -d -p 8080:80 simple-php-app
```
You can then access your PHP application by navigating to http://localhost:8080 in your web browser.
