<?php
require("actions".DIRECTORY_SEPARATOR."functions.php") ;
$id=$_GET["id"];
delete_destinataire($id);
header("location:index.php");