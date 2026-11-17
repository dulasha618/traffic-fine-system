<?php include'component/header.php'?>
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
    <div class="container mt-5 br-color border">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12 bg-color">
                <h3 class="text-center pt-5">CONTACT US</h3>
                <img src="images/aa.jpg" style="width:350px; height:350px" alt="" class="img-fluid">
            </div>

            <div class="col-md-6 col-lg-6 col-12 pt-4 bg-color">
                <h3 class="text-center pb-4">SEND US A MESSAGE</h3>

                <?php
                    session_start();
                    if(isset($_SESSION["create"])){
                ?>

                    <div class="my-3 pl-3 text-success">
                        <?php
                            echo $_SESSION["create"];
                            unset ($_SESSION["create"]);
                        ?>
                    </div>
                    <?php
                    }

                ?>
            <form action="process.php" method="post">
                <div class="form-group pl-3 pt-1">
                    <label for="name" class="form-label">Name</label>

                    <div class="row">
                    <div class="col">
                        <input type="text" name="firstname"  class="form-control" placeholder="First Name" aria-label="First Name" id="firstname">
                    </div>

                    <div class="col">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" id="lastname">
                    </div></div></div>

                    <div class="form-group pl-3 pt-1">
                    <label for="tel" class="form-label">Telephone No</label>
                    <input type="tel" name="telno"  class="form-control" placeholder="Telephone No" id="telno">
                     </div>

                     <div class="form-group pl-3 pt-1">
                    <label for="email" class="form-label">E-mail</label>
                     <input type="email" name="email"  class="form-control" placeholder=" E-mail" id="email">
                     </div>

                     <div class="form-group pl-3 pt-1">
                    <label for="message" class="form-label">Message</label>
                     <textarea name="msg"  class="form-control" placeholder=" Your Message" id="msg"></textarea>
                     </div>

                     <div class="pl-3">
                        <button class="btn btn-primary" type="submit" name="sendmsg">SUBMIT</button>
                     </div>

                </form>
        </div>
    </div>
</div>
<?php include'component/footer.php'?>
</body>
</html>