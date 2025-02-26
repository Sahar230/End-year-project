<?php
include "db-connect.php";
$id=$_GET['id'];
echo $id;
$req="update reservation set etat='confirmer' where id='{$id}'";
if($res = mysqli_query($conn,$req)){
 
 ?>
 <?php include 'sidebar.php'; ?>
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Scheduling</title>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
     <script src="./js/jquery-3.6.0.min.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <script src="./fullcalendar/lib/main.min.js"></script>
     <style>
         :root {
             --bs-success-rgb: 71, 222, 152 !important;
         }
 
         html,
         body {
             height: 50%;
             width: 70%;
             margin:50px 200px 20px 200px; !important;
             font-family: Apple Chancery, cursive;
         }
 
         .btn-info.text-light:hover,
         .btn-info.text-light:focus {
             background: #000;
         }
         table, tbody, td, tfoot, th, thead, tr {
             border-color: #ededed !important;
             border-style: solid;
             border-width: 1px !important;
         }
         .row{
             margin-left: 20% !important;
           
         }
         a{
             text-decoration: none;
             color:white;
             
         }
     </style>
 </head>
 
 <body class="bg-light">
    
 <div class="cardt rounded-0 shadow">
                     <div class="card-header bg-gradient  text-light" style="background-color:#b97d2e ">
                         <h5 class="card-title">Formulaire de planification de reunion</h5>
                     </div>
                     <div class="card-body">
                         <div class="container-fluid">
                             <form action="save_planing.php" method="post" id="schedule-form">
                                 <input type="hidden" name="id" value="">
                                 <label for="idReservation" class="control-label">reservation id</label>
                                 <input type="text" name="idReservation" value=<?php echo $_GET['id'];?> >
                               
                                  
                                 <div class="form-group mb-2">
                                     <label for="evenement" class="control-label">Description</label>
                                     <input type="text" class="form-control form-control-sm rounded-0" name="description" id="evenement" required>
                                 </div>
                                 <div class="form-group mb-2">
                                 < <label for="salle"> salle:</label>
 
 <select name="salle" id="salle">
  <?php
  include "db-connect.php";
  $req="select id,nom from salle";
  $result=mysqli_query($conn ,$req) or die (mysqli_error($conn ));
  while($data=mysqli_fetch_assoc($result)){
     echo"<option value= ".$data["id"].">".$data['nom']."</option>";
  }?>
   
 </select>
 </div>
 
                              
                                 
                               
                             </form>
                         </div>
                     </div>
                     <div class="card-footer">
                         <div class="text-center">
                             <button  style="background-color:#b97d2e " class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> enregistrer</button>
                             <button  style="background-color:#b97d2e " class="btn btn-primary border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Annuler</button>
                         </div>
                     </div>
                 </div>
 </body>
 </html>

<?php }else{
   echo '<script>alert("la reservation ne pas confirmer ");window.location.href="save_user.php";</script>';
   echo'erreur'.(mysqli_error($conn ));;
}
?>
