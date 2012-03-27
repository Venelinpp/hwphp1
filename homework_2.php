<html>
<head>
<title>
Venelin Petrov 71325
</title>

</head>

<body>
<?php
$arr=array();
$i=0;
function is_prime($temp)
{
	$dev=2;
	 $maxdec=sqrt($temp);
	 $prime=true;
	 while($prime && ($dev<=$maxdec)){
	if($temp % $dev==0)
		{
	$prime=false;
		}
	$dev++;
	 }		
return $prime;				 
}

function find_3_prime($tmp){
	$br=0;
	foreach($tmp as $value)
	{
	 if (is_prime($value)==1){
	 $br++;
	 }
	 
	 if( $br==3)
	 {
	 echo $value;
	 break;
	 }
	}

}

function check_exists($tmp)
{
	$mas=Array(146,284,871);
	foreach( $mas as $value)
	{
	if(in_array( $value, $tmp)==true)
	{
	echo"The number".$value."exists in  the  array</br>";
	}
	else
	{
	echo "The number".$value."does not exists in  the array</br>";
	}
	}
}

foreach (range(20, 1000, 37) as $number) {
	$arr[$i]=$number;
	$i++;
}
find_3_prime($arr);
echo"</br>";
check_exists($arr);
?>
</body>
</html>