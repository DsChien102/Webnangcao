<?php
if(!defined('_SECURITY')){
    die('Ban khong co quyen truy cap trang nay!');
}
//Truy van nhieu du lieu
function getAll($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//Truy van 1 du lieu
function getOnce($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//Insert du lieu
function insert($table,$data){
    /*
    $data=[
        'name'=>'Ngoc',
        'email'=>'ngoc@example.com',
        'phone'=>'123456789'
     */
    global $conn;
    $keys = array_keys($data);
    $cot = implode(',',$keys);
    $place= ':'.implode(',:',$keys);
    
    $sql="INSERT INTO $table ($cot) VALUES($place)";
    echo $sql;
    $stm= $conn->prepare($sql);//Sql injection

    //thuc thi cau lenh

        $stm->execute($data );
} 
    