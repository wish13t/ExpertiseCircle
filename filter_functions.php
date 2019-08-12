<?php
function expertise_circle(){
$conn = db_connect();

    $result = $conn->query("SELECT * from expertisecircle");
    if($result){

      while($row = mysqli_fetch_array($result)){
  			print " <tr> \n";
        print "<td>" . $row['SNo'] . "</td>";
  			print "<td>" . $row['Name'] . "</td>";
  			print "<td>" . $row['Sector'] . "</td>";
  			print "<td>" . $row['class'] . "</td>";
  			print "<td>" . $row['Availaibility'] . "</td>";
  			print "<td>" . $row['Location'] . "</td>";
  			print "</tr>   \n";
      }
      }
    else{
      return false;

    }
  };
?>
