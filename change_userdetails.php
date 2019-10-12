

<?php
require_once ('dbconnector.php');

$sql="update user set name='$_POST[name]', tp = '$_POST[tp]',username = '$_POST[username]',password = '$_POST[password]' where id = $_POST[id];";

if(mysqli_query($con,$sql)){           
            header("refresh:0; url= change_user_details.php");
    }
    else 
        echo "Error in changing userdetails";



?>



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
