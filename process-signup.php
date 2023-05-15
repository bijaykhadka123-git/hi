<?php
if(empty($_POST)){
    die("name is required");

}
if(! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("valid email is required");
}
if(strlen($_POST["password"])<8){
    die("password should be at least 8 character");

}
if(!preg_match("/[a-z]/i",$_POST["password"])){
    die("password must conatain at least one letter");
}
if(!preg_match("/[0-9]/",$_POST["password"])){
    die("password must conatain at least one number");
}
if($_POST["password"] !== $_POST["repeat_password"])
{ 
    die("password must match");
}  
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";
$sql="INSERT INTO valid (fullname,email,password_hash)VALUES(?,?,?)";
$stmt = $mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    die("sql error:".$mysqli->error);
}
$stmt->bind_param("sss",$_POST["fullname"],$_POST["email"],$password_hash);
$stmt->execute();
echo"signup successfully";

print_r($_POST);
var_dump($password_hash);
?>