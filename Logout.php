<?php 
session_start();
session_unset();
session_destroy();
header("Location: /Project_2/HomePage.php");
exit();