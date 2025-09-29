<?php 
const _SECURITY = true;

const _MODULES = 'dashboard';
const _ACTION = 'index';

// Khai báo database
const _HOST = 'localhost';
const _DB ='manager_hung';
const _USER ='root';
const _PASS = '09062004';
const _DRIVER = 'mysql';

// debug error
const _DEBUG = true;

// thiết lập hsost
define('_HOST_URL', 'http://'. $_SERVER['HTTP_HOST'] . '/manager_course');
define('_HOST_URL_TEMPLATES', _HOST_URL . '/templates');

// thiết lập path
define('_PATH_URL', __DIR__);
define('_PATH_URL_TEMPLATES', _PATH_URL. '/templates');