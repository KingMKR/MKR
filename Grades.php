
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
		<label>To check the Grades of marks:</label>
		<button name="button">press here</button>
		

	</form>
			<?php
		if (isset($_POST['button'])) {
$name=$_POST['name'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];
$name4=$_POST['name4'];
$name5=$_POST['name5'];
if ($name>=90&&$name<=100) {
	echo "O";
	echo "<br>";
}
elseif ($name>=80&&$name<90) {
	echo "E";
	echo "<br>";
}
elseif ($name>=70&&$name<80) {
	echo "A";
	echo "<br>";
}
elseif ($name>=60&&$name<70) {
	echo "B";
	echo "<br>";
}
elseif ($name>=50&&$name<60) {
	echo "C";
	echo "<br>";
}
elseif ($name>=40&&$name<50) {
	echo "D";
	echo "<br>";
}
elseif ($name<40) {
	echo "F";
	echo "<br>";
}
else
	echo "Wrong Input";
	echo "<br>";
if ($name2>=90&&$name2<=100) {
	echo "O";
	echo "<br>";
}
elseif ($name2>=80&&$name2<90) {
	echo "E";
	echo "<br>";
}
elseif ($name2>=70&&$name2<80) {
	echo "A";
	echo "<br>";
}
elseif ($name2>=60&&$name2<70) {
	echo "B";
	echo "<br>";
}
elseif ($name2>=50&&$name2<60) {
	echo "C";
	echo "<br>";
}
elseif ($name2>=40&&$name2<50) {
	echo "D";
	echo "<br>";
}
elseif ($name2<40) {
	echo "F";
	echo "<br>";
}
else
	echo "Wrong Input";
echo "<br>";
if ($name3>=90&&$name3<=100) {
	echo "O";
	echo "<br>";
}
elseif ($name3>=80&&$name3<90) {
	echo "E";
	echo "<br>";
}
elseif ($name3>=70&&$name3<80) {
	echo "A";
	echo "<br>";
}
elseif ($name3>=60&&$name3<70) {
	echo "B";
	echo "<br>";
}
elseif ($name3>=50&&$name3<60) {
	echo "C";
	echo "<br>";
}
elseif ($name3>=40&&$name3<50) {
	echo "D";
	echo "<br>";
}
elseif ($name3<40) {
	echo "F";
	echo "<br>";
}
else
	echo "Wrong Input";
echo "<br>";
if ($name4>=90&&$name4<=100) {
	echo "O";
	echo "<br>";
}
elseif ($name4>=80&&$name4<90) {
	echo "E";
	echo "<br>";
}
elseif ($name4>=70&&$name4<80) {
	echo "A";
	echo "<br>";
}
elseif ($name4>=60&&$name4<70) {
	echo "B";
	echo "<br>";
}
elseif ($name4>=50&&$name4<60) {
	echo "C";
	echo "<br>";
}
elseif ($name4>=40&&$name4<50) {
	echo "D";
	echo "<br>";
}
elseif ($name4<40) {
	echo "F";
	echo "<br>";
}
else
	echo "Wrong Input";
echo "<br>";
if ($name5>=90&&$name5<=100) {
	echo "O";
	echo "<br>";
}
elseif ($name5>=80&&$name5<90) {
	echo "E";
	echo "<br>";
}
elseif ($name5>=70&&$name5<80) {
	echo "A";
	echo "<br>";
}
elseif ($name5>=60&&$name5<70) {
	echo "B";
	echo "<br>";
}
elseif ($name5>=50&&$name5<60) {
	echo "C";
	echo "<br>";
}
elseif ($name5>=40&&$name5<50) {
	echo "D";
	echo "<br>";
}
elseif ($name5<40) {
	echo "F";
	echo "<br>";
}
else
	echo "Wrong Input";
echo "<br>";



	
	
		}
	

?>
	

</body>
</html>