<?php
include("../config/connectionDB.php");
$userId = $_POST['uId'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$idnum = $_POST['id_num'];
$address = $_POST['address'];
$cel_phone = $_POST['cel_phone'];
$email = $_POST['email'];

$sql = "UPDATE users SET
        first_name = '$fname',
        last_name = '$lname',
        number_id = '$idnum',
        address = '$address',
        celphone = '$cel_phone',
        email = '$email'
        WHERE
        number_id = '$idnum'
        id = '$userId'";
        

        if ($conn->query($sql)===TRUE){
            echo "<script> alert('El usuario ha sido actualizado')</script>";
            header("refresh:0;url=http://127.0.0.1/pets/back/src/list_users.php");
        }else {
            echo $conn->error;
        }