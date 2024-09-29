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
        <link rel="stylesheet" type="text/css" href="./CSS/dashboard.css">
</head>
<body> 
   
	   <img src="./IMAGES/Slider_Image7.jpg">
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

                    <div class="formbox">
			 	<div class="formcontainer">
			 		<div class="topHeader">
			 			<h1>What are you trying to find on our website?</h1>
			 		</div>
                     <a href="adopt_dashboard.php"><button type="submit" class="btn1" name="register">Adopt the Pet</button></a> 
                     <a href="donate_dashboard.php"><button type="submit" class="btn2" name="register">Donate the Pet</button></a> 

                </div>
        </div>
          </nav>
		</header>

        
</body>
</html>