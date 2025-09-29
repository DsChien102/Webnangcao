<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();//tao moi phien lam viec hoac tiep tuc phien lam viec
ob_start();//tranh loi header,cookie
require_once 'config.php';
require_once 'includes/connect.php';
require_once 'includes/database.php';
require_once 'includes/session.php';


require_once './templates/layouts/index.php';

$module = _MODULES;
$action = _ACTION;

if (!empty($_GET['module'])) {
    if (is_string($_GET['module'])) {
        $module = trim($_GET['module']);
    }
}

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

$path ='modules/'.$module.'/'.$action.'.php';
if(!empty($path)){
  if(file_exists($path)){
      require_once $path;
  }else{
    require_once 'modules/errors/404.php';
  }
}else{
  require_once 'modules/errors/500.php';
}