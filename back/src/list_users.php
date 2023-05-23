<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuarios</title>
</head>
<body>
    <table border="1" align="center">
        <tr><td colspan="7" align="center">Lista de todos los usuarios</td></tr>
        <tr>
            <th>Firtsname</th>
            <th>Lastname</th>
            <th>Ident</th>
            <th>Address</th>
            <th>Cellphone</th>
            <th>Email</th>
            <th>Action</th>
        <tr>
        <?php
            include("../config/connectionDB.php");
            $sql="SELECT * FROM users";
            $result=$conn->query($sql);
            //num_rows nos ayuda ver los datos que tenemos dentro de la base de datos
            if($result->num_rows > 0){
                //fetch_assoc el detecta cuando ya todos los registros pasaron
                while($row = $result->fetch_assoc()){
                    echo
                    "<tr>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['number_id']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['celphone']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <a href='http://127.0.0.1/pets/back/src/delete.php?userId=".$row['id']."'><img src='../../front/icono/delet.jpeg' width='40'></a>&nbsp
                            <a href='http://127.0.0.1/pets/back/src/edit_user.php ?userId=".$row['id']."'><img src='../../front/icono/update.jpeg' width='40'></a>
                        </td>
                    <tr>";
                }
            }else{
                echo"No data fond";
            }
        ?>

    </table>    


</body>
</html>
