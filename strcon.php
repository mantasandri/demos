<!-- Demo for String to Hex/Decimal/Binary Conversion -->

<!DOCTYPE HTML> 
<html>
<head>
	<title>String Converter</title>
</head>
<body style="text-align:center;">
<?php
	$varStr = "";	
	if($_POST['submit'] == "Submit")
	{
		$varStr = $_POST['str'];
	}
?>
<h2>Input</h2>
<form method="post">
	Input your String: <input type="text" name="str" value="<?php echo $str;?>">
	<input type="submit" name="submit" value="Submit"> 
</form>
<br>
<h2>Results</h2>
<?php
	$arr = str_split($varStr);
	echo "Your value in Hexadecimal: ";
	foreach ($arr as $value) {
		echo bin2hex($value);
	}
	echo "<br>";
	echo "Your value in Decimal: ";
	foreach ($arr as $value) {
		echo hexdec(bin2hex($value));
	}
	echo "<br>";
	echo "Your value in Binary: ";
	foreach ($arr as $value) {
		echo decbin(bin2hex($value));
	}
?>	

</body>
</html>
