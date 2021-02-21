<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php



print "<form method = POST action = site4.php>";
print "Enter array";
for($i= 0; $i<5; $i++)
{
 print "<input type=text name=txt$i  />";

}
print "<input type=submit value=Submit  />";
print"</form>";
$arr=array();
if(isset($_POST['txt0']))
{
for($i=0; $i<5; $i++)
{
  $arr[$i]=$_POST['txt'.$i];

}

function f1(array $arr1=array())
{
  $arr=$arr1;
for($i=0; $i<5; $i++)
  {
    if($arr[$i]%4==0 && $arr[$i] %6==0)
    {
      echo "<br>";
      echo $arr[$i];

    }
    elseif ($arr[$i]%4==0 || $arr[$i] %6==0)
    {
       echo "<br>";
       echo $arr[$i];

    }
    else
    {
        echo "";
    }
  }
}

f1($arr);
}
?>


</body>
</html>
