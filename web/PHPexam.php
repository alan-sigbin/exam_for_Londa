<!DOCTYPE html>
<html>
<head>
	<title>
		PHP exam
	</title>
</head>
<body>
	<p>PHP exam</p>

	<?php 

		session_start();

		$s = 'Example Text String';
		
		$_SESSION['string'] = $s;
		
		// replace all letters in T to N, display the result on the screen
		echo str_replace("T","N", $_SESSION['string'])."<br>";
		
		$s_arr =  str_split($_SESSION['string']);
		print_r ($s_arr);

	 ?>
	
		 <!-- <form action="" method="POST">
		 	<input type="text" name="newstring">
		 	<button type="submit" name="invertcase">invert case</button>
 		 	<button type="submit" name="replace">replace String</button>
		 </form> -->

		 <form action="<?php $_PHP_SELF ?>" method="GET" style="margin-bottom: 3rem; margin-top: 1rem;">
		 	<label for="newstring">Input a String: </label>
		 	<input type="text" name="newstring">
		 	<button type="submit" name="invertcase">invert case</button>
 		 	<button type="submit" name="replace">replace $s variable</button>
		 </form>
	
	<?php 
		function invertCase() {
		    $_SESSION['newstring'] = $_GET['newstring'];
		    $inverted = strtolower($_SESSION['newstring']) ^ strtoupper($_SESSION['newstring']) ^ $_SESSION['newstring'];
		    echo "output: ".$inverted;
		}

		function replaceStr() {
			$_SESSION['string'] = $_REQUEST['newstring'];
			echo $_SESSION['string'];
		}


		if (isset($_REQUEST['invertcase'])) {
			invertCase();
		 }

		 if (isset($_REQUEST['replace'])) {
		 	replaceStr();
		 }

	 ?>
	 
</body>
</html>