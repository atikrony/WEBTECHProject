<?php
require_once '../Model/config.php';



$GLOBALS['conn'] = getConnection();

class myDb{





    function insertUser($name, $dob, $email, $phone, $id , $username , $password, $gender, $image )
{
    $sql = "INSERT INTO admin (name, dob, email, phone, id , username , password, gender, image )
    VALUES('{$name}','{$dob}','{$email}','{$phone}','{$id}','{$username}','{$password}','{$gender}','{$image}')";
    $GLOBALS['conn']->exec($sql);
    return true;
}

function getUser($username, $password)
{
    $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
    $result = $GLOBALS['conn']->query($sql);
    return $result->fetch();
}

function getAllUser()
{
    $sql = "SELECT * FROM admin";
    $result = $GLOBALS['conn']->query($sql);
    return $result->fetchAll();


}

function deleteUser($id)
{
    $sql = "DELETE FROM admin WHERE id = '{$id}'";
    $GLOBALS['conn']->exec($sql);
    return true;
}

function getUserById($id)
{
    $sql = "SELECT * FROM admin WHERE id = '{$id}'";
    $result = $GLOBALS['conn']->query($sql);
    return $result->fetch();
}

function updateUser($name, $dob, $email, $phone, $id , $username , $password, $gender, $image )
{
    $sql = "UPDATE admin SET name = '{$name}', dob = '{$dob}', email = '{$email}', phone = '{$phone}', id = '{$id}', username = '{$username}', password = '{$password}, file = '{$image}' WHERE id = '{$id}'";
    $GLOBALS['conn']->exec($sql);
    return true;
}


}