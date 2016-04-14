<!-- Demo for String to Hex/Decimal/Binary Conversion -->

<!DOCTYPE HTML> 
<html>
<head>
	<meta charset="utf-8">
	<title>String Converter</title>
</head>
<body style="text-align:center;">
<?php
	$varStr = "";	
	if($_POST['submit'] == "Submit")
	{
		$varStr = $_POST['str'];
	}
	
	function str_to_hex($val) {
		foreach ($val as $value) {
			echo bin2hex($value);
		}
	}
	function str_to_dec($val) {
		foreach ($val as $value) {
			echo hexdec(bin2hex($value));
		}
	}
	function str_to_bin($val) {
		foreach ($val as $value) {
			echo decbin(bin2hex($value));
		} 
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
	echo "Your value in Hexadecimal: <strong>";
	echo str_to_hex($arr) . "</strong><br>";
	echo "Your value in Decimal: <strong>";
	echo str_to_dec($arr) . "</strong><br>";
	echo "Your value in Binary: <strong>";
	echo str_to_bin($arr);
	echo "</strong>";
?>	

</body>
</html>
