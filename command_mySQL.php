SELECT user,authentication_string,plugin,host FROM mysql.user; // hiển thị danh sách user mysql

create user 'name'@'localhost' identified by 'password'; // tạo user và password

grant all privileges on *.* to 'name@localhost'; // cấp tất cả quyền cho user

grant select, update, insert on databse.* to name@localhost; // cấp quyền select, update, insert cho user

show privileges; // hiển thị danh sách quyền

show grants for 'name'@'localhost'; // hiển thị quyền cho user

revoke insert on database.* from name@localhost; // tước quyền user

revoke all privileges on *.* to 'name@localhost'; // tước tất cả quyền user

drop user 'name'@'localhost'; // xóa user
