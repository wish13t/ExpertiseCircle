<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM expertisecircle
 ";
 if(isset($_POST["sector"]))
 {
  $sector_filter = implode("','", $_POST["sector"]);
  $query .= "
   AND product_sector IN('".$sector_filter."')
  ";
 }
 if(isset($_POST["class"]))
 {
  $class_filter = implode("','", $_POST["class"]);
  $query .= "
   AND product_class IN('".$class_filter."')
  ";
 }
 if(isset($_POST["availaibility"]))
 {
  $availaibility_filter = implode("','", $_POST["availaibility"]);
  $query .= "
   AND product_availaibility IN('".$availaibility_filter."')
  ";
 }
 if(isset($_POST["location"]))
 {
  $location_filter = implode("','", $_POST["location"]);
  $query .= "
   AND product_location IN('".$location_filter."')
  ";
 }
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
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
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>
