<?php
include "db-connect.php";
$id=$_GET['id'];
echo $id;
$req="update reservation set etat='annuler' where id='{$id}'";
if($res = mysqli_query($conn,$req)){
 echo'succes'.(mysqli_error($conn ));
 echo '<script>alert("la reservation a été annuler ");window.location.href="reservation_list.php";</script>';}

else{
   echo '<script>alert("la reservation ne pas confirmer ");window.location.href="reservation_list.php";</script>';
   echo'erreur'.(mysqli_error($conn ));;
}
?>