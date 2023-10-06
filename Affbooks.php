<!DOCTYPE html>
<html lang="en">
<head>
<html>
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
  <title>The List of Books</title>
</head>
<body>
<table border="1" width="90%">
      
          <tr>
          <th>Picture of Book </th>
            <th>ID</th>
            <th>NameBook</th>
            <th>NbBook</th>
            <th></th>
            <th></th> 
            <th></th>
        </tr>
       <?php  
          require 'connexion.php';
          $req="SELECT * FROM book";
          $query=mysqli_query($con,$req);
          while($rows=mysqli_fetch_assoc($query))
          {
            $id=$rows['IDbook'];
            echo "<tr>";
            echo "<td>".$rows['Picbook']."</td>"; 
             echo "<td>".$rows['IDbook']."</td>";
             echo "<td>".$rows['Namebook']."</td>";
             echo "<td>".$rows['Nbbook']."</td>";
             echo "<td><a href='barrow.php?ID=".$id."'>Borrowing</a></td>";
             echo "<td><a href='listebarrow.php?ID=".$id."'>Liste of Borrowing</a></td>";
             echo "<td><a href='user.html'>Home</a></td>";
             echo"</tr>";

           }
       ?>
    </table>
          </body>
          </html>