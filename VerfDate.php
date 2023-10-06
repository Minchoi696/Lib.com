<?php
 require 'connexion.php';
$a=$_GET['idt'];
$b=$_GET['idb'];
$query="DELETE FROM `barrow2` WHERE IDTAKER='$a'and IDBOOK='$b'";
 $res=mysqli_query($con,$query);
 if(isset($res))
 {
     $qaa="UPDATE `book` SET Nbbook=Nbbook+1 where `IDbook`='$b'";
      $resaa=mysqli_query($con,$qaa);
      if (isset($resaa))
      {
       header("location:aAffbooks.php");
      }
 }
  ?>
