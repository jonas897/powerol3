<?php include "header.php"; ?>


<?php

if(isset($_GET['projectID'])){

    $currentProject = $_GET['projectID'];
    
    $projectData = selectSingleProject($conn,$currentProject);

}
    echo "<div class='row'>";
     echo "<div class='card-deck col-sm-6'>
     <div class='card'>
       <div class='card-body'>
         <h5 class='card-title'>Customer info</h5>
         <ul class='list-group'>
           <li class='list-group-item mycolor'>First name: {$projectData['First_Name']}</li>
           <li class='list-group-item mycolor'>Last name: {$projectData['Last_Name']}</li>
           <li class='list-group-item mycolor'>Phonenumber: {$projectData['Phonenumner']}</li>
           <li class='list-group-item mycolor'>Duration</li>
           <li class='list-group-item mycolor'>Cost</li>
         </ul>
         
       </div>
       <div class='card-footer'>
         
         </a>
         </div>
       </div>
       </div>";
	

       echo "<div class='card-deck col-sm-6'>
       <div class='card'>
         <div class='card-body'>
           <h5 class='card-title'>Car info</h5>
           <ul class='list-group'>
             <li class='list-group-item mycolor2'>Make: {$projectData['Make']}</li>
             <li class='list-group-item mycolor2'>Model: {$projectData['Model']}</li>
             <li class='list-group-item mycolor2'>Problem: {$projectData['Beskrivning']}</li>
             <li class='list-group-item mycolor2'>License number {$projectData['Reg']}</li>
             <li class='list-group-item mycolor2'>Cost</li>
           </ul>
           
         </div>
         <div class='card-footer'>
           
           </a>
           </div>
           </div>
           </div>
         </div>";


?>
















<?php include "footer.php"; ?>