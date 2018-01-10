<?php 
include_once("Ferry.class.php");
$enkapsulasi_external = new identitas();
echo "Enkapsulasi di akses dari external class";
echo $enkapsulasi_external->extra_info();


?>