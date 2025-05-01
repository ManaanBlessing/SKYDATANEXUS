<?php


$servername = "localhost"; 
$username = "root";        
$password = "";             
$dbname = "skydata";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$projectname = $_POST['fieldName'];
$location=$_POST['location'];
$productionDate = $_POST['productionDate'];
$oilProduction=$_POST ['oilProduction'];
$gasProduction=$_POST['gasProduction'];
$drillingDepth=$_POST['drillingDepth'];
$reservoirPressure=$_POST['reservoirPressure'];
$AdditionalNotes=$_POST['AdditionalNotes'];
$welltype= $_POST['welltype'];
// Insert data into database
$sql = "INSERT INTO upstream (projectname,locations,productiondate,oilproduced,welltype,drillingdepth,reservoirpressure,gasproduction,notes)
 VALUES ('$projectname', '$location','$productionDate','$oilProduction','$gasProduction','$drillingDepth','$reservoirPressure','$AdditionalNotes'','$welltype')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();










?>