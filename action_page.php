<?php
$username = $_POST["uname"];
$password = $_POST["psw"];

if($username="sayan" and $password=="pwd")
{
  echo "login";
}
else{
  echo "not logined";
}
?>
<br>
<a href="index.php">Login Page</a>