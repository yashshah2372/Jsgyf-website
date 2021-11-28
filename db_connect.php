<?php 
    $host="localhost";
    $username="id17855667_yashshah_2372";
    $password="Shahkaran@2807";
    $dbname="id17855667_jsgyfme";
    
    $conn=mysqli_connect($host, $username, $password, $dbname);
    if(mysqli_connect_errno())
    {
        echo mysqli_connect_error();
    }
    else
    {
        // echo "successful";
    }
?>