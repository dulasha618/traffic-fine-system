<?php
if(isset($_POST["pay"])){

    $dname = mysqli_real_escape_string($conn,$_POST["dname"]);
    $nic = mysqli_real_escape_string($conn,$_POST["nic"]);
    $offensename = mysqli_real_escape_string($conn,$_POST["ofname"]);
    $payamount = mysqli_real_escape_string($conn,$_POST["payamount"]);
    $em = mysqli_real_escape_string($conn,$_POST["em"]);
    $dl_no = mysqli_real_escape_string($conn,$_POST["dl_no"]);
    $vehicleno = mysqli_real_escape_string($conn,$_POST["vehicleno"]);
    

    $sql = "INSERT INTO pay(dname,nic,offensename,pay_amount,email,dl_no,vehicleno) VALUES('$dname','$nic','$offensename','$payamount','$em','$dl_no','$vehicleno')";

    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["create"] = "Payment successfully";
        header("Location:pay.php");
    }
    else{
        echo"Error creating database:" . $conn->error;
    }

}
?>