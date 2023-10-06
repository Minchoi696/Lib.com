<?php
$emailer = "";
if(isset($_POST['submit']))
{
    $emaili = $_POST['email'];

if (empty($_POST["email"])) {
  $emailer = "Email is required";
}

else
{
    require 'connexion.php';
    $id =$_GET['ID'];
      $query=" UPDATE `user` SET `Email`='$emaili'   where `IDuser`='$id'";
      $res=mysqli_query($con,$query);
    if (isset($res))
    {
  header("location:aAffusers.php");
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
      <h1>Updates</h1>
      <h4>Welcome </h4>
      <form method="POST">
        <label>Email</label>
        <input type="email" name ="email" />
        <span style="color: red; font-size: 10px;"><?php echo $emailer ?></span>
        <button  name="submit" type="submit">submit</button>
      <closeform></closeform></form>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>