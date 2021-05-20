<?php
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD','');
   define('DB_DATABASE', 'testgit');
$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if(isset($_POST["submit"])){
 $v=$_REQUEST["var"];s
if(!mysqli_query($db,"INSERT INTO num(number) VALUES ('$v')"))
echo "<script>alert('not inserted')</script>";
else
echo "<script>alert('inserted')</script>";

}


?>
<html>
<form action="" method="post">
<input type="text" name="var"/>
<input type="submit" value="submit" name="submit"/>
</form>
</html>