<?php
require("./donateconnection.php");
require("./connection.php");
if (isset($_POST['donate'])) 
{
   $Breed=$_POST["Breed"];
   $Age=$_POST["Age"];
   $Owner=$_POST["Owner"];
   
   $query="INSERT INTO donate(Breed, Age, Owner)VALUES('$Breed','$Age','$Owner')";
   $result=mysqli_query($conn,$query);
   if($result) 
   {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Successfully data entry done..!")';  
      echo '</script>'; 
      header('location:donate.php'); 
      
   }
   else
   {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("DOnation not done successfully, please try again..!")';  
      echo '</script>'; 
   }
}

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
        <link rel="stylesheet" type="text/css" href="./CSS/donatedashboard.css">
</head>
<body> 
   
      <!--<img src="./IMAGES/Slider_Image5.jpg">-->
      <header>
         <h1 class="logo">PetShelter</h1>
          <nav class="navigation">
             <!-- <a href="index.php">Home</a>
              <a href="#">Services</a>
              <a href="#">Contact</a>
              <a href="#">About</a>-->
             <!--<img src="./IMAGES/user.png" class="user">-->


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

      <div class="formbox">
            <div class="formcontainer">
               <div class="topHeader">
                  <h1>Donate your Pet</h1>
               </div>
               
               <form action="" method="POST">

               <div class="input-box">
                  <label>Breed</label>
                  <input type="text" name="Breed" required><br><br>
                      
               </div>
               <div class="input-box">
                  <label>Age</label> (In Months)
                  <input type="text" name="Age" required><br><br>
                    
               </div>
               <div class="input-box">
                   
                  <label>Owner</label>
                  <input type="text" name="Owner" required><br><br><br>
                  
               </div>

               <a href="donate.php"><button type="submit" class="btn" name="donate">Donate Now</button>
               </a>
               </form>
            </div>
         </div>


               <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>