
<h1 class="center">Projects</h1>
<?php
include "header.php";
	if(!$user->checkLoginStatus()){
		$user->redirect("index.php");
	}
		echo"<h2>Hello {$_SESSION['uname']}</h2>";
		echo "<p>Your role number is {$_SESSION['urole']}</p>";
		echo "<p>Your id number is {$_SESSION['uid']}</p>";
?>

<div class="projects">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<?php include "footer.php"; ?>