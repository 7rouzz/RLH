<?php
$id=$_GET['id'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "DELETE from reservation where id='$id' ";
$res=$con->query($req);

header('location:index.php#Reservations');

?>