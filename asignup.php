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
 $msg= " New user has been created";
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
      <h1>Add User</h1>
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
     
    </div>
    <p class="para-2">
    <a href="admin.html">Home</a>
    </p>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>