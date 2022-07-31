<html>
  <head>
    
  </head>
  <style>
  form {border: 3px solid #f1f1f1;margin-left:20%;margin-right:20%;}
  input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
  
 </style>
  <body>
    <form action="forgotpassword.php" method="get">
      <input type="text" name="email" placeholder="Your Email">
      <input type="submit" value="Submit">
      <input type='hidden' value="Incorrect Password">
    </form>
    <?php
    if(isset($_GET["email"]))
    {
      if($_GET["email"]=="xyz@macebook.com")
      {
      echo '<h1>You can now directly login with OTP</h1>';
      echo '<form action="forgotpassword.php" method="get">
      <input type="text" name="OTP" placeholder="Enter the OTP">
      <input type="submit" value="Submit">
    </form>';
      }
      else 
      {
        echo 'Incorrect Password';
      }
    }
    if($_GET["OTP"]=="010")
      echo '<script>window.location.href="final.php"</script>';
  ?>
  </body>
</html>