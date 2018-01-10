<?php
include_once("Ferry.class.php");
class turunan_id extends identitas
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
public function lihat_nama(){
	return "Namanya : $this->nama";
}


}

//proses instansiasi dari class turunan_id
$data_baru_tapi_sama= new turunan_id();

$data_baru_tapi_sama->nama="Ferry Hernando";

//tampilkan data

echo $data_baru_tapi_sama->lihat_nama();


?>