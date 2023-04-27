
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
<?php
include "header.php";
	if(!$user->checkLoginStatus()){
		$user->redirect("index.php");
	}
?>
<div class="container">
<div class='row'>

<?php

$allprojekts = selectprojekt($conn);
  foreach ($allprojekts as $row){
     echo "<div class='card-deck col-lg-3 col-md-4 col-sm-6'>
     <div class='card'>
     <div class=''>
       <div class='card-body'>
         <h5 class='card-title'>{$row['Headline']}</h5>
         <ul class='list-group'>
           <li class='list-group-item list-group-item-success'><i class='fa fa-briefcase'style='font-size:20px;'></i>   License number: {$row['Reg']}</li>
           <li class='list-group-item list-group-item-success'><i class='fa-solid fa-triangle-exclamation'></i>   Problem: {$row['Beskrivning']}</li>
           <li class='list-group-item list-group-item-success'><i class='fa fa-clock-o'style='font-size:20px;'></i>    Deadline: {$row['Date_Deadline']}</li>
           <li class='list-group-item list-group-item-success'><i class='fa fa-inr'style='font-size:20px;'></i>   Make: {$row['Make']}</li>
           <li class='list-group-item list-group-item-success'><i class='fa fa-user'style='font-size:20px;'></i>   Person: {$row['First_Name']}</li>
         </ul>
         
       </div>
       <div class='card-footer'>
        <a href='singleprojekt.php?projectID={$row['projekt_id']}'>Show project</a>
         </div>
         </div>
         
       </div>
       </div>";
	


}

?>

</div>
</div>
<?php include "footer.php"; ?>



