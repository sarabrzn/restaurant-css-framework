<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Administrative</title>
</head>
<body style='background:lightgray'>
  <h1 style="text-align:center">CHEZ IDALINE ADMINISTRATION</h1>
</body>
</html>

<?php
include ("credentials.php");
/* $sql = "select (date, firstname, lastname,email,message,id) from users"; */
$sql = 'SELECT date,firstname,lastname,email, message,id FROM users';
$result = $conn->query($sql);


if ($result = $conn->query($sql));{
  
  if(mysqli_num_rows($result) > 0){
    echo "<table border='1'style='margin-left:auto;margin-right:auto'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th style='width:150px;height:40px'>Date</th>";
        echo "<th style='width:250px'>Name</th>";
        echo "<th style='width:350px'>E-mail</th>";
        echo "<th style='width:600px'>Message</th>";
        echo "<th style='width:60px'>Delete</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody style='text-align:center'>";
    while($row = $result->fetch_assoc()){
      echo "<tr style='height:32px'>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      //"GET" request for id
    /*  Icon by <a href="https://freeicons.io/profile/723">DotFix Technologies</a> on <a href="https://freeicons.io">freeicons.io</a> */
                                
      echo '<td><a href = "delete.php?id= ' . $row['id'] . ' "role="button"><img src = "images/delete.png"></a></td>';
      echo "</tr>"; 
    }
     echo "</tbody>";                            
  echo "</table>";
  }
}   

$conn->close();

?>