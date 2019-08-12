
<?php

function db_connect(){
    //returns a db connection
    $result = mysqli_connect("localhost", "root", "", "expertise_circle");
    if(!$result){
        throw new Exception("Could not connect to database server");
    } else {
        return $result;
    }
}
?>
