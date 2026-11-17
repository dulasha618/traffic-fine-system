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

   <section class="gla-img">
        <div class="container">
            <img src="images/im3.jpg"style="width:100%;" alt="" class="mySlides img-fluid">
        </div>
    </section>

    <div class="container">
        

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>

                <th scope="col">#</th>
                <th scope="col">OFFENSE TYPE</th>
                <th scope="col">FINES</th>
                <th scope="col">ACTION</th>
               </tr>
            </thead>

            <tbody>

            <?php
            include("connect.php");
            $sql = "SELECT * FROM offense_fines";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($result)){
        ?>


                <tr>
                <th scope="row"><?php echo $row["offenseid"];?></th>
                <td><?php echo $row["offense_type"];?></td>
                <td><?php echo $row["fines"];?></td>

                <td><a href="pay.php?id=<?php echo $row["offenseid"];?>"class="btn btn-primary">PAY</a></td>
                </tr>

                <?php
            }
                ?>
            </tbody>

        </table>

    </div>
    <?php include'component/footer.php'?>
</body>
</html>
