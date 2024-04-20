Update the package index:

sudo apt update
Install PHP and Apache (or Nginx, if you prefer):

sudo apt install php libapache2-mod-php

After installation, restart Apache for the changes to take effect:

sudo systemctl restart apache2

After installing PHP, you can test if it's working correctly by creating a PHP file in your web server's document root directory (usually /var/www/html or /var/www)

Then, access this file through a web browser (e.g., http://localhost/index.php). If PHP is installed properly, you should see a page displaying PHP information
