<?php
//Print_r($_POST);
//die();
include_once 'config/db.php';
$sql = 'INSERT INTO person(Firstname,Lastname, GroupNum, Teacher, Level, Thesis, Teacher_status)'
        . ' VALUES ("'. $_POST["Firstname"] .'","'.
        $_POST["Lastname"] .'","'.
        $_POST["GroupNum"] .'",'.
        $_POST["Teacher_id"] .','. 
        $_POST["Level"] .','.
        $_POST["Thesis"] . ','.
        $_POST["Status"] 
        .')';  
if(mysqli_query($con, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". mysqli_error($conn);  

}  


mysqli_close($con);
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

