<?php

$user="root";
$password="";


$conn = new PDO('mysql:host=localhost;dbname=sampletest', $user, $password);



$statement=$conn->query("select * from agents");

// while($row=$statement->fetch(PDO::FETCH_ASSOC))
// {
//   echo $row['AGENT_NAME'] .'<br>'; 
// }

// while($row=$statement->fetch(PDO::FETCH_OBJ))
// {
//   echo $row->WORKING_AREA .'<br>'; 
// }


?>