<?php
class  identitas
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public  $nama;
	public $tempat_lahir;
	public $tanggal_lahir;
	public $alamat;
	public $kelurahan;
	public $kecamatan;
	public $agama;
	public $kewarganegaraan;
	private $jenis_kelamin = "Laki-laki";
	private $status_pernikahan = "Menikah";
	private $hobi ="Menonton";

	function sett_identitas($nama,$tmpt,$tgl_lhr,$alamat,$kelurahan,$kecamatan,$agama,$kewarganegaraan){

		$this->nama=$nama;
		$this->tempat_lahir=$tmpt;
		$this->tanggal_lahir=$tgl_lhr;
		$this->alamat=$alamat;
		$this->kelurahan=$kelurahan;
		$this->kecamatan=$kecamatan;
		$this->agama=$agama;
		$this->kewarganegaraan=$kewarganegaraan;
	}

	public function show_identitas(){
		echo $this->nama;
		echo $this->tempat_lahir;
		echo $this->tanggal_lahir;
		echo $this->alamat;
		echo $this->kelurahan;
		echo $this->kecamatan;
		echo $this->agama;
		echo $this->kewarganegaraan;

	}
	//pengaplikasian enkapsulasi pada oop dengan mengguakan methode public
	public function extra_info(){
		echo $this->jenis_kelamin;
		echo $this->status_pernikahan;
		echo $this->hobi;
	}

}

$enkapsulasi_internal=new identitas();
echo "Enkapsulasi internal class";
echo $enkapsulasi_internal->extra_info();

?>