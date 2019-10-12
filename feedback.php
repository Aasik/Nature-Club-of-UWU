<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php

require_once ('dbconnector.php');
session_start();
    
if (isset($_POST['Submit'])){

    $name=  mysqli_real_escape_string($con,$_POST['name']);
    $email=  mysqli_real_escape_string($con,$_POST['email']);
    $subject=  mysqli_real_escape_string($con,$_POST['subject']);
    $suggestion =  mysqli_real_escape_string($con,$_POST['suggestion']);
    $seen = 0;
    
    
    $sql="INSERT INTO feedback(name,email,subject,suggestion,seen) VALUES('$name','$email','$subject','$suggestion','$seen')";
    if(mysqli_query($con,$sql)){
            echo "Thanks for your Feedback!!!";
            header("refresh:2; url= index.html");
    }
    else 
        echo "Error in Feedback";

}
      

   ?>

