<?php
$con = mysqli_connect("localhost", "root", "", "register");
if (!$con) 
{
    // code...
    echo "Error".mysqli_connect_error();
}

?>