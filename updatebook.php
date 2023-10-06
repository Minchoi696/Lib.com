<?php
$Namebooker = "";
$Nbbooker= "";
if(isset($_POST['submit']))
{
    $Namebook = $_POST['Namebook'];
    $Nbbook = $_POST['Nbbook'];

if (empty($_POST["Namebook"])) {
$Namebooker = "Name is required";
}

else
{
    require 'connexion.php';
    $id =$_GET['ID'];
      $query=" UPDATE `book` SET `Namebook`='$Namebook' , `Nbbook`='$Nbbook'  where `IDbook`='$id'";
      $res=mysqli_query($con,$query);
    if (isset($res))
    {
  header("location:aAffbooks.php");
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
        <label>Name of Book</label>
        <input type="text" name ="Namebook" />
        <span style="color: red; font-size: 10px;"><?php echo $Namebooker ?></span>
        <label>Number of Book</label>
        <input type="text" name ="Nbbook" />
        <span style="color: red; font-size: 10px;"><?php echo $Nbbooker ?></span>
        <button  name="submit" type="submit">submit</button>
      <closeform></closeform></form>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>