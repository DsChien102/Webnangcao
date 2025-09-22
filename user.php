/*
Hệ thống khóa học trực tuyến
User:
-id INT primary key
-fullname varchar 200
-email varchar 100
-phone varchar 50
-address varchar 500
-forget_token varchar 500
-active_token varchar 500
-status int (1: active, 0: inactive, -1: banned)
-permission text
-group_id int
-created_at date time
-updated_at date time


Token_login:
-id INT primary key
-user_id int
-token varchar 500
-created_at date time
-updated_at date time


Course:
-id INT primary key
-name varchar 200
-slug varchar 100
-description text
-category_id int
-thumbnail varchar 500
-created_at date time
-updated_at date time
Course_category:
-id INT primary key
-name varchar 200
-slug varchar 100
created_at date time
-updated_at date time
Permissions:
Groups:
-id INT primary key
-name varchar 200
-slug varchar 100
-created_at date time
-updated_at date time
*/