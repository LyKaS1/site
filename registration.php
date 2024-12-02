<?php 
$full_name = $_POST['full_name'];
$birthday = $_POST['birthday'];
$locate = $_POST['locate'];
$email = $_POST['email'];
$password = $_POST['password'];

$db_host = "localhost"; 
$db_user = "***"; // Логин БД
$db_password = "***"; // Пароль БД
$db_base = '***'; // Имя БД
$db_table = "users"; // Имя Таблицы БД


$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

if ($mysqli->connect_error) 
{
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result = $mysqli->query("INSERT INTO ".$db_table." (full_name, birthday, locate, email, password) VALUES ('$full_name','$birthday','$locate','$email','$password')");
?>
