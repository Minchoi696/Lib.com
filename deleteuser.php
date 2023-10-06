<?php
  require 'connexion.php';
  $id =$_GET['ID'];
  $query="DELETE FROM `user` WHERE IDuser='$id'";
  $res=mysqli_query($con,$query);
  if (isset($res))
  {
header("location:aAffusers.php");
  }
  ?>