<?php 
session_start();
 require 'database/dbconfig.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Question</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 </head>
 <body>
 	<div id="frame" style="width: 75%; margin: 0 auto;">
 		<form action="que10.php" method="post">
 			<div id= "question">
 				<?php 
 				$i =10;
 				$query = "select * from que where id = $i";
				 $result = mysqli_query($con,$query);

 				while ($question = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
 					echo "<strong></br> "."   ".$i." )".$question['question']."   </strong></br></br>";
					 }


 				 ?>
 			</div></br></br>
 		<div>
 				

 			<img src="img/10A.png" height="250" style="margin:0px 50px">
 			<img src="img/10B.png" height="250" style="margin:0px 50px">
 			<img src="img/10C.png" height="250" style="margin:0px 50px">
 			<img src="img/10D.png" height="250" style="margin:0px 50px"></br></br>
 			<input type="radio" name="ans" value="A" style="margin:0px 115px">
 			<input type="radio" name="ans" value="B" style="margin:0px 115px">
 			<input type="radio" name="ans" value="C" style="margin:0px 115px">
 			<input type="radio" name="ans" value="D" style="margin:0px 115px"></br></br>
 			<input type="submit" name="next" value="Finish" id="back_btn" style="width: 10% ; margin-left: 75%">
 			<?php
		 if (isset($_POST['next'])) {
		 	$ans = $_POST['ans'];
		 	
		 	
		 	$query ="select * from point where id = $i";
		 	$query_run= mysqli_query($con,$query);
		 	while ($point = mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
		 			
		 			if ($ans == 'A') {
		 				$_SESSION['score']= $_SESSION['score'] + $point['A'];
		 			}elseif ($ans == 'B') {
		 				$_SESSION['score']= $_SESSION['score'] + $point['B'];
		 			}elseif ($ans == 'C') {
		 				$_SESSION['score']= $_SESSION['score'] + $point['C'];
		 			}elseif ($ans == 'D') {
		 				$_SESSION['score']= $_SESSION['score'] + $point['D'];
		 			}
 				
					}
					if ($_SESSION['score']<150) {
						header('location:Adventure.html');
						session_destroy();
					}elseif ($_SESSION['score']<220) {
						header('location:material.html');
						session_destroy();
					}
					elseif ($_SESSION['score']<300) {
						header('location:fam.html');
						session_destroy();
					}
					elseif ($_SESSION['score']<400) {
						header('location:rom.html');
						session_destroy();
					}
			}

		  ?>
 		</div>

 		</form>
 	</div>
 
 </body>
 </html>