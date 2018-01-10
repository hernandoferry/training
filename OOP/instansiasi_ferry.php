<?php
include_once("Ferry.class.php");

//proses instasniasi
$obj_identitas=new identitas();

//manupulasi properti dan method pada class identitas.

$obj_identitas->sett_identitas("Roy"," Surabaya"," 10 juni 1985"," jl.ujung berung"," ujung"," ujung berung"," islam"," INA");

echo $obj_identitas->show_identitas() ."<br>";

//penerapan enkapsulasi dari external class bakalan error
$enkapsulasi_external = new identitas();
echo "Enkapsulasi di akses dari external class";
echo $enkapsulasi_external->extra_info();

?>