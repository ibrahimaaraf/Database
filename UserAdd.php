<?php
include_once("user_service.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $result=addNewUser($_POST['name'],$_POST['email']);
    if($result)
	{
        echo "User Added.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <h3><a href="user_home.php">Home</a></h3>
    <form method="POST" onsubmit="return validation()">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" name="name"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"/></td>
             </tr>
             <tr>
                    <td></td>
                    <td><input type="submit" value="Add"/></td>
                </tr>
        </table>
    </form>
    <script>
    function validation()
	{
        if(document.getElementById('name').value==""){
            alert('name can not be empty');
            return false;
        }
    }
    </script>
</body>
</html>
