<?php
include("connect.php");
if(isset($_POST["payment"])){

    $dname = mysqli_real_escape_string($conn,$_POST["dname"]);
    $nic = mysqli_real_escape_string($conn,$_POST["nic"]);
    $offensename = mysqli_real_escape_string($conn,$_POST["ofname"]);
    $payamount = mysqli_real_escape_string($conn,$_POST["payamount"]);
    $em = mysqli_real_escape_string($conn,$_POST["em"]);
    $dl_no = mysqli_real_escape_string($conn,$_POST["dl_no"]);
    $vehicleno = mysqli_real_escape_string($conn,$_POST["vehicleno"]);
    $ads = mysqli_real_escape_string($conn,$_POST["ads"]);
    $cty = mysqli_real_escape_string($conn,$_POST["cty"]);
    $state = mysqli_real_escape_string($conn,$_POST["state"]);
    $zip = mysqli_real_escape_string($conn,$_POST["zip"]);
    $nacard = mysqli_real_escape_string($conn,$_POST["nacard"]);
    $nocard = mysqli_real_escape_string($conn,$_POST["nocard"]);
    $exmo = mysqli_real_escape_string($conn,$_POST["exmo"]);
    $exyr = mysqli_real_escape_string($conn,$_POST["exyr"]);
    $cvv = mysqli_real_escape_string($conn,$_POST["cvv"]);

    $sql = "INSERT INTO pay(dname,nic,offensename,pay_amount,email,dl_no,vehicleno,address,city,state,zip,cardname,cardno,expmonth,expyear,cvv) VALUES('$dname','$nic','$offensename','$payamount','$em','$dl_no','$vehicleno','$ads','$cty','$state','$zip','$nacard','$nocard','$exmo','$exyr','$cvv')";

    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["create"] = "Payment successfully";
        header("Location:donepayment.php");
    }
    else{
        echo"Error creating database:" . $conn->error;
    }

}
?>