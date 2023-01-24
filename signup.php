<?php 

$server = "localhost";
$username = "root";;
$password = "";
$dbname = "ar!";

$con = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['psw'];

    $insertquery = "INSERT INTO `signup`(`name`, `email`, `gender`, `mobile`, `password`) VALUES ('$name','$email','$gender', '$mobile','$password')";

    mysqli_query($con, $insertquery);

    header('location:loginAR.html')

    // $res = mysqli_query($con, $insertquery);

    // if($res){
    //     ?>
    //     <script>
    //         alert("data inserted properely");
    //     </script>
    //     <?php
    // }

    // else{
    //     ?>
    //     <script>
    //         alert("data not inserted properly");
    //     </script>
    //     <?php
    // }


}

//start

// $name = $_POST['name'];
// $email = $_POST['email'];
// $gender = $_POST['gender'];
// $mobile = $_POST['mobile'];
// $password = $_POST['psw'];

// $sql = "INSERT INTO `signup`(`name`, `email`, `gender`, `mobile`, `password`) VALUES ('$name','$email','$gender', '$mobile','$password')";

// $result = mysqli_query($con , $sql);

// if($result){
//     echo "Data entered succesfully";
// }

// else{
//     echo " query failed.....!";
// }


?>