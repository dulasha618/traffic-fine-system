<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/paystyles.css">

</head>
<body>



    <div class="containers">
    
       <div class="payments">

        <div class="imgs">
        <img src="images/done.gif" alt="">
        </div>

       <h1 class="text-center">Payment Done!</h1>

       <?php include("connect.php");
       $sql = "SELECT * FROM pay";
       $result = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($result)){
       $id = $row["payid"];
       }
       ?>

   
       <?php
                    session_start();
                    if(isset($_SESSION["create"])){
                ?>

                    <div class="my-3 pl-3 text-success">
                        <?php
                            echo $_SESSION["create"];
                            unset ($_SESSION["create"]);
                        ?>
                        <a href="pdf.php?payid=<?php echo $id ?>" target= "_blank">Click here to download receipt....</a>
                    </div>
                    <?php
                    }

                ?>
            

       <a href="home.php"><input type="button" value="Go to Home Page" class="submit-btn" name="payment"></a>    
       </div> 
    </div>
</body>
</html>