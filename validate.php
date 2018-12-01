<?php 

$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'webtech';

$conn = mysqli_connect($hostName, $userName, $password , $databaseName);


?>

<?php 
$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$blood = $_POST['blood'];



echo 'helloz'.$name;


$sql = "insert into user "




 ?>