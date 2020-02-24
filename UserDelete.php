<?php

include_once("user_service.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
        if(isset($_POST['yes']))
		{
            $result=removeUser($_GET['id']);
            if($result)
			{
                header("Location:user_show.php");
            }
        }
        else if(isset($_POST['no']))
		{
            header("Location:user_show.php");
        }
        
    }
    $user=loadUser($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Id:<?=$user['id']?></td>
            </tr>
            <tr>
                <td>Name:<?=$user['name']?></td>
            </tr>
            <tr>
                <td>Email:<?=$user['email']?></td>
                
             </tr>
             <tr>
                    <td><input type="submit" name="yes" value="Yes"/></td>
                    <td><input type="submit" name="no" value="No"/></td>
                </tr>
        </table>
    </form>
</body>
</html>
