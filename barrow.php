<?php
$idbook =$_GET['ID'];
$ider = "";
$msg = "";
$time = date('Y-m-d');
if(isset($_POST['submit']))
{
 $id = $_POST['id'];
 if(empty($id))
{
$ider = "ID is Requierd ";
}

else
{
    require 'connexion.php';
    $q="select * from user where IDuser='$id'";
    $r=mysqli_query($con,$q);
    $c=mysqli_num_rows($r);
    if($c > 0)
    {
        $query="select * from book where IDbook='$idbook' and Nbbook>1";
        $res=mysqli_query($con,$query);
        if(isset($res))
        {
            $qa="INSERT INTO `barrow2`(`IDTAKER`, `IDBOOK`, `DATEe`) VALUES ('$id','$idbook','$time')";
            $resa=mysqli_query($con,$qa);
            $qaa="UPDATE `book` SET Nbbook=Nbbook-1 where `IDbook`='$idbook'";
             $resaa=mysqli_query($con,$qaa);
             if (isset($resaa))
             {
              header("location:Affbooks.php");
             }
        }

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
  </head>
  <body>
    <div class="login-box">
      <h1>Borrwoing</h1>
      <form method="POST">
        <label>Your ID</label>
        <input type="text" name="id" placeholder="" />
        <span style="color: red; font-size: 10px;"><?php echo $ider ?></span>
       <button  name="submit" type="submit">submit</button>
       <span style="color: red; font-size: 10px;"><?php echo $msg ?></span>
      <closeform></closeform></form>

  </body>
</html>