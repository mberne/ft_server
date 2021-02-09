#Nginx
cd /etc/nginx/sites-enabled
rm -rf default
mv /home/nginx.conf .
yes "" | openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt

#Wordpress
cd /var/www/html
wget http://fr.wordpress.org/latest-fr_FR.tar.gz
tar -xzvf latest-fr_FR.tar.gz
rm -rf latest-fr_FR.tar.gz
chown -R www-data:www-data wordpress
cd wordpress
rm -rf ./wp-config-sample.php
mv /home/wp-config.php .

#PHPMyAdmin
cd /var/www/html
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz
mv phpMyAdmin-5.0.4-all-languages phpmyadmin
rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
chown -R www-data:www-data phpmyadmin
cd phpmyadmin
rm -rf config.sample.inc.php
mv /home/config.inc.php .

#Service start
service nginx start
service php7.3-fpm start
service mysql start

cd /var/www/html/phpmyadmin/sql
mysql < create_tables.sql
cd /home/
mysql < wordpress.sql

tail -f /var/log/nginx/access.log /var/log/nginx/error.log