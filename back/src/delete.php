<?php
    include("../config/connectionDB.php");
    $id=$_GET['userId'];
    $sql="DELETE FROM users WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        if($conn->affected_rows>0){
            echo"<script>alert('El usuario ha sido eliminado')</script>";
            //header es un riderecionamineto automatico
            //refresh:0 no ayuda a redirecionar el tiempo en que se demora en ir a la pestaña
            header('refresh:0; url=http://127.0.0.1/pets/back/src/list_users.php');
        }else{
            echo"<script>alert('El usuario NO ha sido eliminado')</script>";
            header('refresh:0; url=http://127.0.0.1/pets/back/src/list_users.php');
        }
    }else{
        echo"ERROR: ".$conn->error;
    }
?>