<?php

$con=mysqli_connect('localhost','root','');

if(!$con){
    die("Database Connection failed" .mysql_errno($con));
    }

    $select_db=  mysqli_select_db($con,'group project');
    
 if(!$select_db){
    die("Database selection failed" .mysql_errno($con));
    }
   

