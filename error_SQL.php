ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2)  // không thể kết nối tới local MySQL
solution 1:
sudo apt-get remove --purge mysql\*   // Xóa sql
sudo apt-get install mysql-server mysql-client // cài đặt sql
sudo mysql -u root -p  // đặt password cho tài khoản root
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password'; // tạo user với username và password
GRANT ALL PRIVILEGES ON * . * TO 'username'@'localhost'; // cấp quyền cho user
FLUSH PRIVILEGES; // lưu thay đổi

solution 2: khi quên mật khẩu mysql
sudo mysql

SELECT user,authentication_string,plugin,host FROM mysql.user;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';

FLUSH PRIVILEGES;

//source: https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql
--------------------------------------------------------------------
ERROR 1819 (HY000): Your password does not satisfy the current policy requirements // Mật khẩu không phù hợp
SHOW VARIABLES LIKE 'validate_password%'; // kiểm tra trạng thái chính sách (policy)
SET GLOBAL validate_password_policy=LOW; // đặt trạng thái bảo mật mật khẩu là LOW (thấp)
//source: https://tecadmin.net/change-mysql-password-policy-level/
//------------------------------------------------------------------
Error phpmyadmin:
#1824 - Failed to open the referenced table 'employees'
uncheck Enable foreign key checks  //Bỏ chọn foreign key khi import database
