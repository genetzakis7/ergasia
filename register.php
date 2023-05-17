<?php

$dbname = "id20465649_cinemadb";
$dbuser = "id20465649_admin";
$dbpass = "Kastanos7!";
$dbhost = "localhost";

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$lastname=$_POST["lastname"];

$port=3306;

$dsn = "mysql:host={$dbhost};dbname={$dbname};port={$port};charset=utf8mb4";
$options= [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$pdo=new PDO($dsn , $dbuser, $dbpass,$options);

$hash =password_hash($_POST["password"], PASSWORD_DEFAULT);

$stmt=$pdo->prepare("INSERT INTO users (username , password, lastname, email) VALUES (:username,:passwrod ,:lastname ,:email)");
$stmt->execute(["password "=> $_POST ["users"],"password"=>$hash, "lastname"=>$_POST["lastname"], "email"=>$_POST["email"], "username"=>$_POST["lastname"]]);

$id = $pdo ->lastInsertId();

echo "user was registered with id = $id;"
?>