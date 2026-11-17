<?php
include("connect.php");
if(isset($_POST["sendmsg"])){

    $firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
    $telno = mysqli_real_escape_string($conn,$_POST["telno"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $msg = mysqli_real_escape_string($conn,$_POST["msg"]);

    $sql = "INSERT INTO contact(firstname,lastname,telno,email,msg) VALUES('$firstname','$lastname','$telno','$email','$msg')";

    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["create"] = "Message sent successfully";
        header("Location:contact.php");
    }
    else{
        echo"Error creating database:" . $conn->error;
    }

}
?>