
<?php

/**
 * Profile
 */

// Initialisation
require_once('../New_folder/includes/init.php');

// Require the user to be logged in before they can see this page.

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Dealers Map';
include('../New_folder/includes/header.php');

?>
<div class="container">
	<br><br>
	<center><div class="about_container" style="width:800px; text-align:left">
	<center><h3 class="m_3"><b>Dealers Map</b></h3></center>  <br><br>

<iframe src="https://www.google.com/maps/d/embed?mid=zX-rDz5bN6N8.kqnxb9hmq80o" width="800" height="500"></iframe>
	</center>
</div>

<br/><br/>
<?php include('../New_folder/includes/footer.php'); ?>
