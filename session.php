<h1>seesion</h1>
<?php
session_start();
$_SESSION['name']="myname";

echo $_SESSION['name'];
?>