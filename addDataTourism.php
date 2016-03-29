<?php
include 'connect.php';

$idTourism = mysql_real_escape_string($_POST['idTourism']);
$nameTourism = mysql_real_escape_string($_POST['nameTourism']);
$detailTourism = mysql_real_escape_string($_POST['detailTourism']);
$img = mysql_real_escape_string($_POST['img']);
$latitude = mysql_real_escape_string($_POST['latitude']);
$longtitude = mysql_real_escape_string($_POST['longtitude']);
$video = mysql_real_escape_string($_POST['video']);
$idTypeTourism = mysql_real_escape_string($_POST['idtypeTourism']);

//$idTypeTourism = mysql_real_escape_string($_POST['idTypeTourism']);

// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "insert into addData (idTourism, nameTourism,detailTourism,img,latitude,longtitude,video,idTypeTourism)
                      values ('$idTourism','$nameTourism','$detailTourism','$img','$latitude','$longtitude','$video','$idTypeTourism')";

// กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$db_query = mysql_query($sql);
// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้ว'); window.location='addData.php';</script>";
//echo "$Name";
//echo "$DateStart";


?>