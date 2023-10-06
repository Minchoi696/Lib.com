<?php
$ider = "";
$msg = "";
if(isset($_POST['submit']))
{
 $id = $_POST['id'];
 if(empty($id))
{
$ider = "ID Book is Requierd ";
}
else
{
    require 'connexion.php';
    $query="select * from book where IDbook='$id'";
    $res=mysqli_query($con,$query);
    $count=mysqli_num_rows($res);
    if($count > 0)
    {
      header("location:resultbook.php?id=".$id.""); 
    }
    else
    {
      $msg=" Book not found";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search user</title>
    <link rel="icon" href="login.ico">
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="login-box">
      <h1>Search Book</h1>
      <form method="POST">
        <label>id Book</label>
        <input type="text" name="id" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
    <button  name="submit" type="submit">submit</button>
       <span style="color: red; font-size: 10px;"><?php echo $msg ?></span>
      <closeform></closeform></form>
   
  </body>
</html>