<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action=site3.php method="post">
      Enter string:<input type="text" name="stringval">
      <input type="submit">
    </form>
 <?php
 function sayhi(){
   $string1=$_POST["stringval"];
   $stringreverse= strrev($string1);
   echo "Reversed string is ",$stringreverse;
   if ($stringreverse==$string1) {
     echo "<br>Palindrome";
   }else {
     echo"<br>Not Palindrome";
   }
}
    sayhi();
  ?>


</body>
</html>
