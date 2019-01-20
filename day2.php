<?php
/* 
	function add()
	{
		$value1=10;
		$value2=10;
		$add=$value1+$value2;
		echo "Answer: ".$add;
		echo "<br>";
	}
	function sub()
	{
		$value1=10;
		$value2=10;
		$sub=$value1-$value2;
		echo "Answer: ".$sub;
		echo "<br>";
	}
	function mul()
	{
		$value1=10;
		$value2=10;
		$mul=$value1*$value2;
		echo "Answer: ".$mul;
		echo "<br>";
	}

	function div()
	{
		$value1=10;
		$value2=10;
		$div=$value1/$value2;
		echo "Answer: ".$div;
	}
*/
// 	function perform_operation_switch1($a)
// 	{
// 		$value1=10;
// 		$value2=10;
// 		switch ($a) 
// 		{
// 			case '+':
// 				$ans=$value1+$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '-':
// 				$ans=$value1-$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '*':
// 				$ans=$value1*$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '/':
// 				$ans=$value1/$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			default:
// 				echo "Invalid Operator";
// 				break;
// 		}
// 	}
//     function perform_operation_switch2($a,$value1,$value2)
// 	{
// 		switch ($a) 
// 		{
// 			case '+':
// 				$ans=$value1+$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '-':
// 				$ans=$value1-$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '*':
// 				$ans=$value1*$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			case '/':
// 				$ans=$value1/$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 				break;

// 			default:
// 				echo "Invalid Operator";
// 				break;
// 		}
// 	}

// 	function perform_operation_ifelse($a,$value1,$value2)
// 	{
// 		if ($a=="+") 
// 		{
// 			$ans=$value1+$value2;
// 				echo "Answer:". $ans;
// 				echo "<br>";
// 		}
// 		else
// 		if ($a=="-") 
// 		{
// 			$ans=$value1-$value2;
// 			echo "Answer:". $ans;
// 			echo "<br>";
// 		}
// 		else
// 		if ($a=="*") 
// 		{
// 			$ans=$value1*$value2;
// 			echo "Answer:". $ans;
// 			echo "<br>";
// 		}
// 		elseif ($a=="/") 
// 		{
// 			$ans=$value1/$value2;
// 			echo "Answer:". $ans;
// 			echo "<br>";
// 		}
// 		else
// 		if($a=="1")
// 		{
// 			echo "Digits are not allowed as operator";	
// 		}
// 		else
// 		{
// 			echo "Invalid Operator";
// 		}
// 	}
// 	//perform_operation_ifelse("*",12,13);
// if (isset($_POST['btnSubmit'])) 
// {
// 	$v1=$_POST['val1'];
// 	$v2=$_POST['val2'];
// 	echo "Val 1:".$v1;
// 	echo "<br>";
// 	echo "Val 2:".$v2;
// }
 ?>


 <?php 

$myvalues = array("8" , "9" , "5" , "10");

//echo " my values are " . $myvalues[0] . ", " . $myvalues[1] . " and " . $myvalues[2] . ".";


// echo("<pre>");
// print_r($myvalues);
// $arrlength = count($myvalues);
// for($a = 0; $a < $arrlength; $a++)
// { 

// 	//echo($myvalues[$a]);


// 	if ($myvalues[0] < $myvalues[1]) {


// 	}
// 	echo "index = ".'['.$a.']'."=Value=" .$myvalues[$a]."<br>";




// }
// $max=0;
// for ($i=0; $i < count($myvalues); $i++) 
// {
// 	echo  "<pre>"."Running for Index ".$i." Current max value ".$max." ";
// 	if ($myvalues[$i]>$max) 
// 	{
// 		$max=$myvalues[$i];
// 		echo "Max value: ".$max;
// 	}

	
// $min=$myvalues[0];
// for ($i=0; $i < count($myvalues); $i++) 

// { 
// 	if ($myvalues[$i]<$min) 
// 	{
// 		$min=$myvalues[$i];
// 		echo "Minimum Value is=" .$min;	
// 	}
// }



$mainarr = array("2" , "3" , "5" , "8" , "9" , "10" );
$evenarr = array();
$oddayy = array();

for ($i=0; $i <count($mainarr) ; $i++) 

{ 
	if ($mainarr[$i]%2==0) 

	{
		array_push($evenarr, $mainarr[$i]);
	}
	else

	{
		array_push($oddayy, $mainarr[$i]);
	}
}

for ($i=0; $i < count($evenarr) ; $i++) 
{ 
	echo "Even Value is:" . $evenarr[$i] . "<br>";
}

for ($i=0; $i < count($oddayy) ; $i++) 
{ 
	
	echo "Odd Value is:" . $oddayy[$i] . "<br>";
}




  ?>






































<!-- 
 <!DOCTYPE html>
<html>
<head>
</head>
<body>  
  <form class="" action="day2.php" method="post">
  <table>
  <tbody>
    <tr>
      <td>Value 1:</td>
      <td><input type="text" name="val1"/></td>
    </tr>
    <tr>
      <td>Value 2:</td>
      <td><input type="text" name="val2"/></td>
    </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btnSubmit"/></td>
        </tr>
  </tbody>
  </table>
</form>
</body>
</html> -->

<?php 

?>