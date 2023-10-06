<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body {
    height: 200vh;
 display: grid;
place-items: center ;
  }
table {
  border-collapse: collapse;
  width: 560px;
}
table , td , th{
padding: 20px;
}
th, td {
  text-align: left;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(even):hover{
  background-color: #f2f2f2;
  transform: scale(1.3);
  transition: transform 400ms ease-in;
}
th {
  background-color: #04AA6D;
  color: white;
}
</style>
  <meta charset="utf-8">
  <title>The List of Barrowing</title>
</head>
<body>
<table border="1" width="90%">
        <tr>
            <th>IDTAKER</th>
            <th>IDBOOK</th>
            <th>DATE</th>
            <th></th>
        </tr>
       <?php  
        $id =$_GET['ID'];
          require 'connexion.php';
          $req="SELECT * FROM barrow2 where `IDBOOK`='$id'";
          $query=mysqli_query($con,$req);
          while($rows=mysqli_fetch_assoc($query))
          {
             echo "<td>".$rows['IDTAKER']."</td>";
             echo "<td>".$rows['IDBOOK']."</td>";
             echo "<td>".$rows['DATEe']."</td>";
             echo "<td><a href='Affbooks.php'>Back</a></td>";
            echo"</tr>";
           }
       ?>
    </table>
          </body>
          </html>