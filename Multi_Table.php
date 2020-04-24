<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<label><b>Enter the Number whose Multiplication table is to be generated:</b></label>
		<input type="number" name="name">
		<button name="button">press here</button>
		
	</form>
	<?php
	if (isset($_POST['button'])){
		$name=$_POST['name'];
		for($i=1;$i<=10;$i++)
		{
			echo $name;
			echo "*";
			echo $i;
			echo "=";
			echo $name*$i;
			echo "<br>";
		}
	}

	?>

</body>
</html>