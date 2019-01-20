<?php
echo "<h2>PHP"." is Fun!"."</h2>";
$arr=array(
            'name'=>'Faakhir'
          );
//var_dump($arr);//To print variable or array along with datatype
//print_r($arr);exit(); To print php array or object
//For concatenation use DOT .
//To print value use echo or print
//$myVar=0;
//echo $myVar;
function test1($a,$b)
{
  echo $a . " ". $b;
}
test1("Asif",10.5);
function test2()
{
  echo "Faakhir";
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>  
  <form class="" action="index.php" method="post">
  <table>
  <tbody>
    <tr>
      <td>Username:</td>
      <td><input type="text" name="username"/></td>
    </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btnSubmit"/></td>
        </tr>
  </tbody>
  </table>
</form>
</body>
</html>






