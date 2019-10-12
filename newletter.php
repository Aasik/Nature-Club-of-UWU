<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once ('dbconnector.php');
session_start();
    
if (isset($_POST['submit'])){

    $email=  mysqli_real_escape_string($con,$_POST['email']);
    
    $sql="INSERT INTO newsletter(email) VALUES('$email')";
   if(mysqli_query($con,$sql)){
            echo "Thanks you for Subscribing Newsletter";
            header("refresh:2; url= index.html");
    }
    else 
        echo "Not registerd";
}
      

   ?>