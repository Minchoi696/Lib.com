<?php
$ider = "";
$emailer = "";
$passer = "";
$msg = "";
if(isset($_POST['submit']))
{
    $id = $_POST['ID'];
    $emaili = $_POST['email'];
    $pass =$_POST['password'];
    $time = date('Y-m-d');
    if(empty($id))
{
$ider = "ID is Requierd ";
}
if (empty($emaili))
 {
  $emailer = "Email is required";
}
if(empty($pass))
{
    $passer = "Password is Requierd ";
}
if (strlen($pass) <= 8) 
{
$passer = " At least 8 Digits ";
}
else
{
    require 'connexion.php';
    $req="INSERT INTO `user`(`IDuser`, `Email`,`Password`,`Date`) VALUES('$id','$emaili','$pass','$time')";
    $query=mysqli_query($con,$req);
if(isset($req))
{
  header("location:user.html");
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="icon" href="signup.ico">
    <link rel="stylesheet" href="signup.css"/>
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>Welcome GUEST</h4>
      <form method="POST">
        <label>ID</label>
        <input type="text" name="ID" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
        <label>Email</label>
        <input type="email" name ="email" placeholder=""  />
        <span style="color: red; font-size: 10px;"><?php echo $emailer ?></span>
        <label>Password</label>
        <input type="password" name="password" placeholder="" />
         <span style="color: red; font-size: 10px;"><?php echo $passer ?></span>
        <button  name="submit" type="submit">submit</button>
        <span style="color: #00FF8C;"><?php echo $msg ?></span>
      <closeform></closeform></form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>