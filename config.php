<?php
const _SECURITY = true;
const _MODULES = 'dashboard';
const _ACTION = 'index';
//khai báo database
const _HOST = 'localhost';
const _DB = 'manager_hung';
const _USER = 'root';
const _PASS = '';
const _DRIVER = 'mysql';
//debug error
const _DEBUG = true;
//thiết lập host
// Không thể dùng const cho _HOST_URL vì nó chứa biểu thức động ($_SERVER)
// const yêu cầu giá trị phải được biết tại thời điểm biên dịch.
define('_HOST_URL','http://'. $_SERVER['HTTP_HOST'].'/manager_course/');
define('_HOST_URL_TEMPLATES','http://'. $_SERVER['HTTP_HOST'].'/manager_course/templates');
//thiết lập path
 define('_PATH_URL',__DIR__);
 define('_PATH_URL_TEMPLATES',_PATH_URL.'/templates');
 