<?php
$servername = "localhost";
$dbname = "forma";

$str = file_get_contents('config.ini');
$str = strip_tags($str);
$str=str_replace('::::', ' ', $str);
$arr = explode(" ", $str);

$username = $arr[0];
$password = $arr[1];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$loginu = $_POST['loginu'];
$pass = $_POST['pass'];
$ageu = $_POST['ageu'];
$email = $_POST['email'];


$sql = 'INSERT INTO users(first_name, last_name, loginu, pass , ageu, email) VALUES ("'.$first_name.'", "'.$last_name.'", "'.$loginu.'", "'.$pass .'", "'.$ageu.'", "'.$email .'")';
$queryResult = $conn->query($sql);

if(!$queryResult){
    echo '<p><b>Error adding data!</b></p>';
}else {
    echo '<p><b>These added !</b></p>';
}