<?php include('component/header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>TRAFFIC</title>
</head>
<body>

        <div class="container mt-4 border p-4">


        <form action="payment.php" method="post">
            
                     <div class="form-group pl-3 pt-1">
                    <label for="tel" class="form-label">Name</label>
                    <input type="text" name="dname"  class="form-control" placeholder="Name" id="dname">
                     </div>

                    <div class="form-group pl-3 pt-1">
                    <label for="tel" class="form-label">NIC</label>
                    <input type="text" name="nic"  class="form-control" placeholder="NIC" id="nic">
                     </div>

                     <?php 
                        if(isset($_GET["id"])){
                            $id = $_GET["id"];
                            include("connect.php");
                            $sql = "SELECT * FROM offense_fines WHERE offenseid = $id";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                        }
                     ?>

                     <div class="form-group pl-3 pt-1">
                    <label for="ofname" class="form-label">Offense name</label>
                     <input type="text" name="ofname"  class="form-control" placeholder="offence name" id="ofname" value = "<?php echo $row["offense_type"];?>" >
                     </div>

                     <div class="form-group pl-3 pt-1">
                    <label for="message" class="form-label">Pay Amount</label>
                     <input type="text" name="payamount"  class="form-control" placeholder="Amount" id="payamount" value = "<?php echo $row["fines"];?>" >
                     </div>

                     <div class="form-group pl-3 pt-1">
                    <label for="email" class="form-label">E-mail</label>
                     <input type="email" name="em"  class="form-control" placeholder="E-mail" id="em">
                     </div>

                     <div class="form-group pl-3 pt-1">
                    <label for="message" class="form-label">Driving license No</label>
                     <input type="text" name="dl_no"  class="form-control" placeholder="License No" id="dl_no">
                     </div>


                     <div class="form-group pl-3 pt-1">
                    <label for="message" class="form-label">Vehicle No</label>
                     <input type="text" name="vehicleno"  class="form-control" placeholder="Vehicle No" id="vehicleno">
                     </div>

                     <div class="pl-3">
                        <button class="btn btn-primary" type="submit" name="pay">NEXT</button>
                     </div>

                     

                </form>
        </div>
    </div>
</div>
</div>
<?php include('component/footer.php')?>
</body>
</html>