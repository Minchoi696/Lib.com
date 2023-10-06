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
  <title>searching for book by his ID</title>
</head>
<body>
<table border="1" width="90%">
        <tr>
            <th>ID Book</th>
            <th>Name Book</th>
            <th>Nombre Book</th>
            <th> Date creation</th>
            <th></th>
        </tr>
       <?php  
        $a =$_GET['id'];
          require 'connexion.php';
          $req="SELECT * FROM book where `IDbook`='$a'";
          $query=mysqli_query($con,$req);
          while($rows=mysqli_fetch_assoc($query))
          {
             echo "<td>".$rows['IDbook']."</td>";
             echo "<td>".$rows['Namebook']."</td>";
             echo "<td>".$rows['Nbbook']."</td>";
             echo "<td>".$rows['Datecreation']."</td>";
             echo "<td><a href='admin.html'>home</a></td>";
            echo"</tr>";
           }
       ?>
    </table>
          </body>
          </html>