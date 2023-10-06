<?php
$ider = "";
$nameer = "";
$nbbooker = "";
$msg = "";
if(isset($_POST['submit']))
{
    $id = $_POST['ID'];
    $name = $_POST['Name'];
    $nbbook = $_POST['nbbook'];
    $time = date('Y-m-d');
    if(empty($id))
{
$ider = "ID is Requierd ";
}
if (empty($name))
 {
  $nameer = "Name of Book is required";
}
if(empty($nbbook))
{
    $nbbooker = "Number of Book is Requierd ";
}
if (strlen($nbbook) >= 3) 
{
$nbbooker = " Noob of Book greater than 0 ";
}
else
{
    require 'connexion.php';
    $req="INSERT INTO `book`(`IDbook`, `Namebook`,`Nbbook`,`Datecreation`) VALUES('$id','$name','$nbbook','$time')";
    $query=mysqli_query($con,$req);
if(isset($req))
{
 header("location:admin.html"); 
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
      <h1>Add Books</h1>
      <form method="POST">
        <label>ID</label>
        <input type="text" name="ID" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
        <label>Name</label>
        <input type="text" name ="Name" placeholder=""  />
        <span style="color: red; font-size: 10px;"><?php echo $nameer ?></span>
        <label>Number of Books</label>
        <input type="text" name="nbbook" placeholder="" />
         <span style="color: red; font-size: 10px;"><?php echo $nbbooker ?></span>
        <button  name="submit" type="submit">Add Book</button>
        <span style="color: #00FF8C;"><?php echo $msg ?></span>
      <closeform></closeform></form>
    </div>
    <p1> &copy; Med Bejaoui</p1>
  </body>
</html>