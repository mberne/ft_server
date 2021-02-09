CREATE DATABASE IF NOT EXISTS wordpress;

CREATE USER 'wp_root'@'localhost' IDENTIFIED BY 'root';

GRANT ALL PRIVILEGES ON wordpress.* TO "wp_root"@"localhost" IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON phpmyadmin.* TO "wp_root"@"localhost" IDENTIFIED BY 'root';

FLUSH PRIVILEGES;