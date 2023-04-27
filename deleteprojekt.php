
<?php
	include 'header.php';
	
	$errorMessage = "";
	if(isset($_GET['projectID'])){
		$currentProject = $_GET['projectID'];
		$projectData = selectSingleProject($conn,$currentProject);
		}
		
		else {
			$errorMessage = "No car selected";
		}
		

		
		if(isset($_POST['deleteproject'])){ 
		if(deleteproject($conn, $currentProject)){
		header('Location: index.php?carDeleted=1'); 
		}}
		
		
		
		
?>
<div class="bc">
<?php
echo "Do you want to delete " . $projectData['Headline'] . "  " . $projectData['Make'] . "?";
?>

<form method="POST" action="">    <input type="submit" name="deleteproject" value="Delete">    <input type="submit" name="goback" value="Go back"></form>


</div>
<?php include 'footer.php';?>