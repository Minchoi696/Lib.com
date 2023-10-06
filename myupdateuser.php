<?php
$ider = "";
$passer = "";
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $emaili = $_POST['email'];
    $pass =$_POST['password'];
    if(empty($id))
{
    $ider = "ID is Requierd ";
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
    $query="select * from user where IDuser='$id'";
    $res=mysqli_query($con,$query);
    $count=mysqli_num_rows($res);

    if($count > 0)
    {
        $q="UPDATE `user` SET `Email`='$emaili' , `Password`='$pass'  where `IDuser`='$id'";
        $r=mysqli_query($con,$q);
        if(isset($r))
        {
         header("location:user.html"); 
        }
    }
}
}
?>
<style>
p1{
    background: #333;
      display: block;
      color: #FFF;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
      cursor: pointer; 
      padding-top: 20px;
  }
  </style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update</title>
    <link rel="icon" href="signup.ico">
    <link rel="stylesheet" href="signup.css"/>
  </head>
  <body>
    <div class="signup-box">
      <h1>Update</h1>
      <h4>Welcome </h4>
      <form method="POST">
      <label>Your ID</label>
        <input type="text" name ="id" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
        <label>Email</label>
        <input type="email" name ="email" />
        <label>New Password</label>
        <input type="password" name="password" placeholder="" />
         <span style="color: red; font-size: 10px;"><?php echo $passer ?></span>
        <button  name="submit" type="submit">submit</button>
      <closeform></closeform></form>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>