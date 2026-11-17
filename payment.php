<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/stylesss.css">
    <title></title>
</head>
<body>
    
    <div class="container">
    <?php
    if(isset($_POST['pay'])){

?>
        <form action="paymentprocess.php" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">Details</h3>
                

                <div class="inputBox">
                    <span>Full Name:</span>
                    <input Type="text" placeholder="" name="dname" value="<?php echo $_POST['dname']?>" >
                </div>

                <div class="inputBox">
                    <span>NIC-:</span>
                    <input Type="text" placeholder="" name="nic" value="<?php echo $_POST['nic']?>">
                </div>
                
                <div class="inputBox">
                    <span>Offense Name:</span>
                    <input Type="text" placeholder="" name="ofname" value="<?php echo $_POST['ofname']?>">
                </div>
                
                <div class="inputBox">
                    <span>Pay Amount:</span>
                    <input Type="text" placeholder="" name="payamount" value="<?php echo $_POST['payamount']?>">
                </div>
                
                <div class="flex">
                        <div class="inputBox">
                            <span>Driving license No:</span>
                            <input Type="text" placeholder="" name="dl_no" value="<?php echo $_POST['dl_no']?>">
                        </div>

                        <div class="inputBox">
                            <span>Vehicle No:</span>
                            <input Type="text" placeholder="" name="vehicleno" value="<?php echo $_POST['vehicleno']?>">
                        </div>
                </div>
      </div>
      <div class="col pt-4">
                

                <div class="inputBox">
                    <span>E-mail:</span>
                    <input Type="email" placeholder="example@example.com" name="em" value="<?php echo $_POST['em']?>">
                </div>
                
                <div class="inputBox">
                    <span>Address:</span>
                    <input Type="text" placeholder="" name="ads">
                </div>

                <div class="inputBox">
                    <span>City:</span>
                    <input Type="text" placeholder="" name="cty">
                </div>
                
                <div class="flex">
                        <div class="inputBox">
                            <span>State:</span>
                            <input Type="text" placeholder="" name="state">
                        </div>

                        <div class="inputBox">
                            <span>Zip code:</span>
                            <input Type="text" placeholder="" name="zip">
                        </div>
                </div>
      </div>
                <div class="col">
                <h3 class="title">Payment</h3>


                <div class="inputBox">
                    <span>Cards Accepted:</span>
                    <img src="images/vi.jpg" alt="">
                    <img src="images/mr.png" alt="">
                    <img src="images/amr.jpg" alt="">
                    <img src="images/ppc.png" alt="">
                </div>

                <div class="inputBox">
                    <span>Name on Card:</span>
                    <input Type="text" placeholder="Name" name="nacard">
                </div>

                <div class="inputBox">
                    <span>Credit Card Number:</span>
                    <input Type="number" placeholder="1111-2222-3333-4444" name="nocard">
                </div>
                
                <div class="inputBox">
                    <span>Exp Month:</span>
                    <input Type="text" placeholder="January" name="exmo">
                </div>
                
                <div class="flex">
                        <div class="inputBox">
                            <span>Exp Year:</span>
                            <input Type="number" placeholder="2023" name="exyr">
                        </div>

                        <div class="inputBox">
                            <span>CVV:</span>
                            <input Type="text" placeholder="" name="cvv">
                        </div>
                </div>

            </div>
        </div>


        <button class="submit-btn" type="submit" name="payment">PAY</button>

        </form>
        <?php
    }
    ?> 
    </div>

</body>
</html>