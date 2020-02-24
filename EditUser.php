<?php

include_once("user_service.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
        $result=updateUser($_GET['id'],$_POST['name'],$_POST['email']);
        if($result)
		{
            header("Location:user_show.php");
        }
    }
    $user=loadUser($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?=$user['name'] ?>"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?=$user['email'] ?>" /></td>
             </tr>
             <tr>
                    <td></td>
                    <td><input type="submit" value="Save"/></td>
                </tr>
        </table>
    </form>
</body>
</html>
