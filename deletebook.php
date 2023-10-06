<?php
  require 'connexion.php';
  $id =$_GET['ID'];
  $query="DELETE FROM `book` WHERE IDbook='$id'";
  $res=mysqli_query($con,$query);
  if (isset($res))
  {
header("location:aAffbooks.php");
  }
  ?>