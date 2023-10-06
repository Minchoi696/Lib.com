<?php
$ider = "";
$passer = "";
$msg = "";
if(isset($_POST['submit']))
{
 $id = $_POST['ID'];
    $pass = $_POST['Password'];
 if(empty($id))
{
$ider = "ID is Requierd ";
}
elseif(empty($pass))
{
    $passer = "Password is Requierd ";
}
else
{
    require 'connexion.php';
    $query="select * from user where IDuser='$id' and Password='$pass'";
    $q="select * from admin where ID='$id' and Password='$pass'";
    $res=mysqli_query($con,$query);
    $count=mysqli_num_rows($res);
    $r=mysqli_query($con,$q);
    $c=mysqli_num_rows($r);
    if($count > 0)
    {
      header("location:user.html"); 
    }
    elseif($c > 0)
    {
      header("location:admin.html"); 
    }
    else
    {
      $msg=" Account not found";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="icon" href="login.ico">
    <link rel="stylesheet" href="login.css" />
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form method="POST">
        <label>ID</label>
        <input type="text" name="ID" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
        <label>Password</label>
        <input type="password"  name="Password" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $passer ?></span>
        <button  name="submit" type="submit">submit</button>
        <span style="color: red; font-size: 10px;"><?php echo $msg ?></span>
      <closeform></closeform></form>
    </div>
    <p class="par">
      Not have an account? <a href="signup.php">Sign Up Here</a>
    </p>
  </body>
</html>