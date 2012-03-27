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
				if($number <=0 || $number>=1999)
				{
				echo "<p style=\"color:red\">The parameter is not within the range [0,19999]</p>";
				}
				else
				{
				 $dev=2;
				 $maxdec=sqrt($number);
				 $prime=true;
				 while($prime && ($dev<=$maxdec)){
					if($number % $dev==0)
					{
					$prime=false;
					}
					$dev++;
					}
				 if( $prime==false){
				 
				 echo "<p style=\"color:blue\">The number ".$number." is NOT prime !</p>";
				 }
				 else
				 {
				 echo "<p style=\"color:red\">The number".$number." is prime !</p>";
			 }
			 }
		}
		else
		echo "<p style=\"color:red\">The parameter is not a number</p>";
		}
?>



</body>
</html>
