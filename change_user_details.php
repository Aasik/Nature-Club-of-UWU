<?php
require_once ('dbconnector.php');
$sql="SELECT *FROM user where id = 1";

$result = mysqli_query ($con,$sql) or die (mysqli_error ($con));
while ($row = mysqli_fetch_array ($result)){

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Changing user details</h1>
      
<form method="post" action="change_userdetails.php">
<fieldset>
  <legend>Name</legend>
  <input type="text" name="name" value=" <?php echo $row ['name']; ?>" size="25" >
</fieldset>
    <fieldset>
  <legend>Registration Number</legend>
  <input type="text" name="regno" value=" <?php echo $row ['regNo']; ?>" size="25" readonly>
</fieldset>
    <fieldset>
  <legend>Degree Program</legend>
  <input type="text" name="degree" value=" <?php echo $row ['degree']; ?>" size="25" readonly>
</fieldset>
    <fieldset>
  <legend>Phone Number</legend>
  <input type="text" name="tp" value=" <?php echo $row ['tp']; ?>" size="25" >
</fieldset>
    <fieldset>
  <legend>E-mail</legend>
  <input type="text" name="email" value=" <?php echo $row ['email']; ?>" size="25">
</fieldset>
    <fieldset>
  <legend>NIC No.</legend>
  <input type="text" name="nic" value=" <?php echo $row ['nic']; ?>" size="25" readonly>
</fieldset>
    <fieldset>
  <legend>Past Experience</legend>
  <input type="text" name="pstexp" value=" <?php echo $row ['pstexp']; ?>" size="25" readonly>
</fieldset>
<fieldset>
  <legend>Username</legend>
  <input type="text" name="username"  value="<?php echo $row ['username']; ?>" size="25" >
</fieldset>
    <fieldset>
  <legend>Password</legend>
  <input type="password" name="password" value="<?php echo $row ['password']; ?> " size="25">
  <input type="hidden" name="id" value="<?php echo $row ['id']; ?> " size="25">
     </fieldset>


<input type="submit" value="Save Changes" >
</form>
      <?php
} 

?> 
    </body>
</html>


