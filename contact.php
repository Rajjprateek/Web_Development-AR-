<?php 

$server = "localhost";
$username = "root";;
$password = "";
$dbname = "ar!";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
    echo "connection failed";
}

//start

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact`(`name`, `email`, `mobile`, `subject`, `message`) VALUES ('$name','$email','$mobile','$subject','$message')";

$result = mysqli_query($con , $sql);

header('location:index.html')

// if($result){
//     echo "Data entered succesfully";
// }

// else{
//     echo " query failed.....!";
// }


?>