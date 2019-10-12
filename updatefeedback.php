<?php
require_once ('dbconnector.php');

$sql = "update feedback set seen = '1' where fbid = $_POST[fbid];";

if (mysqli_query($con, $sql)) {
    header("refresh:0; url= getfeedback.php");
} else
    echo "Error in Feedback";
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
