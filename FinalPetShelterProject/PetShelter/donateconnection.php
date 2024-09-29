<?php
$conn = mysqli_connect("localhost", "root", "", "donate");
if (!$conn) 
{
    // code...
    echo "Error".mysqli_connect_error();
}

?>