
<html
    <head>
        
<style>
  
      body {
	
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 5px 0 #fff;
	font-size: 18px;
	line-height: 40px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background:  linear-gradient(#777, #444);
	border-left: 2px solid #555;
	border-right: 2px solid #777;
	border-top: 2px solid #555;
	border-bottom: 2px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}





td {
	border-right: 2px solid #fff;
	border-left: 2px solid #e8e8e8;
	border-top: 2px solid #fff;
	border-bottom: 2px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}








    
      
  </style>
    </head>

    <body</body>
</html>






<?php
require_once ('dbconnector.php');
$sql="SELECT Name,Comment FROM comment where Id > (select MAX(Id) - 5 FROM comment)";
if($result=  mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        
        echo "<table>";
         echo "<tr>";
          echo "<th>Name</th>";
           echo "<th>Comment</th>";
           
           echo "</tr>";
           while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Comment'] . "</td>";
                
                echo "</tr>";
        }
        echo "</table>";
    mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
mysqli_close($con);
?>
    
    
