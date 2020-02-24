<?php
include_once("db.php");
function addUser($user)
{
    $query="INSERT INTO users(name,email) VALUES('$user[name]','$user[email]')";
    return executeNonQuery($query);
}
function editUser($user)
{
    $query="UPDATE users SET name='$user[name]',email='$user[email]' WHERE id=$user[id]";
    return executeNonQuery($query);
}
function deleteUser($id)
{
    $query="DELETE FROM users WHERE id=$id";
    return executeNonQuery($query);
}
function getUserById($id)
{
    $query="SELECT * FROM users WHERE id=$id";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=mysqli_fetch_assoc($result);
    }
    return $user;
}

function getAllUser()
{
    $query="SELECT * FROM users";
    $result=executeQuery($query);
    $userList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $userList[$i]=$row;
       }
    }
    return $userList;
}

?>
