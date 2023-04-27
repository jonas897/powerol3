<?php include "header.php"; ?>


<?php

if(isset($_GET['projectID'])){

    $currentProject = $_GET['projectID'];
    
    $projectData = selectSingleProject($conn,$currentProject);

}

     echo "<div class='card-deck'>
     <div class='card'>
     <div class='col-4'>
       <div class='card-body'>
         <h5 class='card-title'>Customer info</h5>
         <ul class='list-group'>
           <li class='list-group-item mycolor'>License number: {$projectData['Reg']}</li>
           <li class='list-group-item mycolor'>Problem: {$projectData['Beskrivning']}</li>
           <li class='list-group-item mycolor'>Date deadline: {$projectData['Date_Deadline']}</li>
           <li class='list-group-item mycolor'>Duration</li>
           <li class='list-group-item mycolor'>Cost</li>
         </ul>
         
       </div>
       <div class='card-footer'>
       <a href='deleteprojekt.php?projectID={$projectData['projekt_id']}'>Delete car</a>
         
         </a>
         </div>
       </div>
       </div>";
	




?>
















<?php include "footer.php"; ?>