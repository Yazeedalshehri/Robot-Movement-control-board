<?php
$movement = $_POST['movementV'];

//database connection

$conn = new mysqli('localhost','root','','movement');
if($conn-> connect_error){
    die('connection failed :' .$conn->connect_error);

} 
else {
        $stmt = $conn->prepare("insert into records(moving) values(?)");
        $stmt->bind_param("s",$movement);
        $stmt->execute();
        echo "new movement have been saved ";
        echo $movement ;
        $stmt->close();
        $conn->close();
    }


?>