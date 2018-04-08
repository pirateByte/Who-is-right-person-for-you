<?php 
require 'database/dbconfig.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 
 <div>
 	<form action="question1.php">
 		<?php
 		next:
 		$i=1;
 		$query = "select select * from que where id = $i";
 		$result = mysqli_query($con,$query);
 		while ($question = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
 					echo "<strong></br> "."   ".$i." )".$question['question']."   </strong></br></br>";
					 }


 		  ?>
 	</form>
 </div>

</body>
 </html>
