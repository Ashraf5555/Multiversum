<?php
session_start();
unset($_SESSION["current_session"]);
header("Location:login.php");
?>