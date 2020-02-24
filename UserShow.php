<?php

include_once("user_service.php");
    $userList=loadAllUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show | Page</title>
</head>
<body>
    <h1>List of User</h1>
    <h3><a href="user_home.php">Home</a></h3>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Operations</th>
        </tr>
        <?php
            foreach ($userList as $user) 
			{
                echo 
                "<tr>
                    <td>$user[id]</td>
                    <td>$user[name]</td>
                    <td>$user[email]</td>
                    <td><a href='user_edit.php?id=$user[id]'>Edit</a> | <a href='user_delete.php?id=$user[id]'>Delete</a></td>
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>