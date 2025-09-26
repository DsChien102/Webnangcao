<?php
if(!defined('_SECURITY')){
    die('Ban khong co quyen truy cap trang nay!');
}
try {
    if(class_exists('PDO')){
        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",//ho tro tieng viet
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION//day loi vao ngoai le
        );
        $dsn =_DRIVER.':host='._HOST.';dbname='._DB;
        $conn = new PDO($dsn, _USER, _PASS, $option);
    }
} catch (Exception $ex) {
    echo'Ket noi khong thanh cong: '.$ex->getMessage();
}