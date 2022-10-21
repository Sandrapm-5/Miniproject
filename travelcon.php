<?php
            $con='localhost';
            $username="root";
            $password="";
            $db="travel_db";
            $con=mysqli_connect($con,$username,$password,$db);
            if(!$con){
                                die ("error:".mysqli_connect_error());
            }
           
?>