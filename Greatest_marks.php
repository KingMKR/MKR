
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Enter The Marks Of The Subject:</h3>
	<form  method="post" action="">
		<label>Physics:</label>
		<input type="number" name="name" placeholder="" value=""><br><br>
		<label>Chemistry:</label>
		<input type="number" name="name2" placeholder="" value=""><br><br>
		<label>Maths:</label>
		<input type="number" name="name3" placeholder="" value=""><br><br>
		<label>English:</label>
		<input type="number" name="name4" placeholder="" value=""><br><br>
		<label>Computer:</label>
		<input type="number" name="name5" placeholder="" value=""><br><br>
		<label>To check the highest marks:</label>
		<button name="button">press here</button>
		

	</form>
			<?php
		if (isset($_POST['button'])) {
$name=$_POST['name'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];
$name4=$_POST['name4'];
$name5=$_POST['name5'];
if ($name>$name2&&$name>$name3&&$name>$name4&&$name>$name5) {
	echo $name;
	# code...
}
elseif ($name2>$name3&&$name2>$name4&&$name2>$name5) {
	echo $name2;
	# code...
}
elseif ($name3>$name4&&$name3>$name5) {
	echo $name3;
	# code...
}
elseif ($name4>$name5) {
	echo $name4;
	# code...
}
else
	echo $name5;

	
	
		}
	

?>
	

</body>
</html>