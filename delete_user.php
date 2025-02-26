<?php 
include('db-connect.php');

$id=$_GET['id'];
$sql = "delete from utilisateur where id=$id ;";
if (mysqli_query($conn,$sql)){
    echo "<script>if(confirm(\"Retirer avec succées!!!\")) document.location = 'users.php';</script>";
}else{
    echo "<script>if(confirm(\"Echec!!!\")) document.location =  'users.php';</script>";


}