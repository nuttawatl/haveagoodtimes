<?php
session_start();
$_SESSION["email"]  = "";
$_SESSION["name"]  	= "";
$_SESSION["role"]   = "";
$_SESSION["authen"]   = "N";

header( "location: ../home" );
exit(0);
?>