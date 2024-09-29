<?php
require("./connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PetShelter</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./CSS/adoptdashboard.css">
</head>
<body> 
   
	   <!--<img src="./IMAGES/Slider_Image6.jpg">-->
		<header>
			<h1 class="logo">PetShelter</h1>
          <nav class="navigation">
			    <!-- <a href="index.php">Home</a>
			     <a href="#">Services</a>
			     <a href="#">Contact</a>
			     <a href="#">About</a>-->
				 <img src="./IMAGES/user.png" class="user">


                 <?php
                    $sel = "SELECT * FROM user_register";
                    $query = mysqli_query($con, $sel);
                    $result = mysqli_fetch_assoc($query);
                ?> 
                    <span>
					              <?php echo $result['Username']?>
					          </span>
          </nav>
		</header>

  
<!-- Content Row 1-->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/dog1.jpg" alt=""></a>
            <div class="card-body">
                 
                
                <input type="number" name="id" hidden="">
                <b>Breed :</b> Golden Retriever</label><br>
                <b>Age :</b><label> 17 months</label><br>
                <b>Owner :</b><label>Mr. Vivek </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/cat1.jpg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label>Toyger </label><br>
                <b>Age :</b><label> 8 months</label><br>
                <b>Owner :</b><label>Mr. Mishra </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/dog2.jpg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label> Small Pug</label><br>
                <b>Age :</b><label> 5 months</label><br>
                <b>Owner :</b><label>Ms. Chafale </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/cat2.png" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label> Manx Cat</label><br>
                <b>Age :</b><label> 11 months</label><br>
                <b>Owner :</b><label>Mr. Chopra </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

</div>

<!-- Content Row 2-->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/dog3.jpg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label> Doberman</label><br>
                <b>Age :</b><label> 10 months</label><br>
                <b>Owner :</b><label>Ms. Mahakalkar </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/cat3.jpeg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label>Japanese Bobtail</label><br>
                <b>Age :</b><label> 5 months</label><br>
                <b>Owner :</b><label>Mr. Shah </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/dog4.jpg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label> Shiba Inu</label><br>
                <b>Age :</b><label> 6 months</label><br>
                <b>Owner :</b><label>Mr. Shingade </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  h-100 "> 
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./IMAGES/cat4.jpg" alt=""></a>
            <div class="card-body">

                <b>Breed :</b><label>American Curl</label><br>
                <b>Age :</b><label> 7 months</label><br>
                <b >Owner :</b><label>Mr. Charl </label><br> 
                <button class="btn btn-sm btn-success btn-block text-uppercase" type="submit"><a style="color: white;" href="adopt.php">Adopt Me</a></button>
            </div>
        </div>        
    </div>
</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
	
</body>
</html>