<html>
<head>
<title>
Venelin Petrov 71325
</title>

</head>

<body>
<form method="get">
<input type="text" id="text"  name="text" />
<input type="submit" id="button" name="button"/>
</form>

<?php

if( empty($_GET["text"])== true)
{
echo "vavedete parametar</br>";
}
else{

	$number=$_GET["text"];
	if( is_numeric($number)==true)
		{
				if($number <=0 && $number>=1999)
				{
				echo "<p style=\"color:red\">The parameter is not within the range [0,19999]</p>";
				}
				 if($number!= 2 && $number%2==0 || $number% 3==0  && $number!= 3 )
				 {
				 echo "<p style=\"color:blue\">The number ".$number." is NOT prime !</p>";
				 }
				 else
				 {
				 echo "<p style=\"color:red\">The number".$number." is prime !</p>";
			 }
		}
		else
		echo "<p style=\"color:red\">The parameter is not a number</p>";
		}
?>



</body>
</html>
