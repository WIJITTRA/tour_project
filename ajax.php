<?php
// Fetching Values From URL
$idTourism = $_POST['idTourism'];
$nameTourism = $_POST['nameTourism'];
$detailTourism = $_POST['detailTourism'];
$video = $_POST['video'];
$img = $_POST['img'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("tourism", $connection); // Selecting Database
if (isset($_POST['idTourism'])) {
$query = mysql_query("insert into addData(idTourism, nameTourism,detailTourism,video,img,latitude,longtitude) values ($idTourism','$nameTourism','$detailTourism','$video','$img','$latitude','$longtitude')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed

?>