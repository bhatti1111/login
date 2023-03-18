<?php
	  require "config.php";
	  session_start();
	  if(!isset($_SESSION['unm']))
	  {
		  echo "helloo.";
		  header("location:dashboard.php");
	  }
?>
	  <a href="logout.php">LOGOUT</a>
