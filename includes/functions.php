<?php
if(!defined('_SECURITY')){
    die('Ban khong co quyen truy cap trang nay!');
}
function layout($layoutName, $data = [])
{

    if (file_exists(_PATH_URL_TEMPLATES . '/layouts/' . $layoutName . '.php')) {
        require_once _PATH_URL_TEMPLATES . '/layouts/' . $layoutName . '.php';
    }
}