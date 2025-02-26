<?php 
include('db-connect.php');

$id=$_GET['id'];
$sql = "delete from reservation where id=$id ;";
if (mysqli_query($conn,$sql)){
    echo "<script>if(confirm(\"ânnuler avec succées!!!\")) document.location = 'mes_reservation.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location =  'mes_reservation..php';</script>";


}