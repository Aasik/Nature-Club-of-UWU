<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once ('dbconnector.php');
$sql="SELECT *FROM feedback where seen = 0 ORDER BY fbid desc limit 1;";

$result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
while ($row = mysqli_fetch_array ($result)){




?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Feedback of Peoples</h1>
      
<form method="post" action="updatefeedback.php">
<fieldset>
  <legend>Name</legend>
  <input type="text" name="name" value=" <?php echo $row ['name']; ?>" size="25" readonly>
</fieldset>
<fieldset>
  <legend>E-mail address</legend>
  <input type="text" name="email"  value="<?php echo $row ['email']; ?>" size="25" readonly>
</fieldset>
    <fieldset>
  <legend>Subject</legend>
  <input type="text" name="subject" value="<?php echo $row ['subject']; ?> " size="25" readonly>
  <input type="hidden" name="fbid" value="<?php echo $row ['fbid']; ?> " size="25">
  <input type="hidden" name="seen" value="<?php echo $row ['seen']; ?> " size="25">
</fieldset>
    <fieldset>
    <legend>Suggestion</legend>
    <textarea rows="4" cols="50" name="suggestion" readonly> <?php echo $row ['suggestion']; ?> </textarea>
    
</fieldset>
<input type="submit" value="Next Feedback" >
</form>
     <?php
} 

?>   
    </body>
</html>
    <?php
echo "Not Available";

?> 


