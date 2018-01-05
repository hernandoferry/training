<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
</head>
<body>
<p><b>Tugas 1</b> </p></br>
Soal No.1 menghitung luas persegi panjang <br>
panjang = 5 &nbsp; lebar= 12 <br>

<?php
function luas_persegi_panjang(){
	$panjang=5;
	$lebar=12;

	$luasnya= $panjang * $lebar;
	echo "panjang luas persegi panjang ialah :" .$luasnya;
}
luas_persegi_panjang();
echo "<br><br>";

?>

Soal No.2 memecah string <br>
string=120831 <br>

<?php
$string="120831";
echo "Output :";
echo substr(chunk_split($string,2,' '),0,-1) ."<br><br>";
?>

Soal No.4 menghitung jumlah huruf vokal pada string "Drink Water" <br>

<?php
$string = "Drink Water";
echo "There are <strong>".preg_match_all('/[aeiou]/i',$string,$matches)." vowels</strong> in the string <strong>".$string."</strong> <br><br>";
?>

Soal No.5 menghitung jumlah kata pada suatu data string <br>
$string = The quick brown fox jumps over the lazy dog.

<?php

$str = "The quick brown fox jumps over the lazy dog.";
$pecah= str_word_count($str,1);
echo "<br>";
echo "Jumlah huruf vokal pada kalimat " .$str ."adalah <b> ".count($pecah) ."</b> <br><br>";
?>

Soal No.3 mendapatkan nilai tengah dari string. jika ganjil ambil 1 jika genap ambil 2 <br>

<?php
$string="352";

function cari_nilai_tengah($string){
$string_to_array=str_split($string);
$cek_jumlah= count($string_to_array);
if ($cek_jumlah%2==0) {
	$awal=($cek_jumlah/2)-1;
	$hasil= substr($string,$awal,-$awal);
	echo "string " .$string ." ";
	echo "genap <br>";
	echo "nilai tengah : " .$hasil;

}

else{
	$awal=($cek_jumlah/2)-0.5;
	$hasil=substr($string,$awal,-$awal);
	echo "string" .$string ." ";
	echo "ganjil <br>";
	echo "nila tengah :" .$hasil ;
	echo  "<br>";
}

}//end function

cari_nilai_tengah(str_replace(" ", " ", $string));
echo "<br>";
?>

Soal no.6 Write a function to compute the future investment value at a given interest rate for a specified number of years. <br>

<?php


	$invest = 1000;
	$rate = 10;
	$years = 5;
	$newrate = $rate*0.01;

echo "Inves Value : " .$invest ."&nbsp; Rate : " .$rate ."&nbsp; Years : " .$years;
?>
<table border="1">
	<thead>
		<th>Years</th>
		<th>FutureValue</th>
	</thead>
	<tbody>
		<?php
		for ($i=1; $i <= $years; $i++) { 
		?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= investAmount($invest,$newrate,$i); ?></td>
		</tr>
		<?php
		}
		function investAmount($investment,$rates,$year){
			$amount = number_format($investment * pow(1+$rates/12,$year*12),2,",","");
			echo $amount;
		}
		?>
	</tbody>
</table>
<br>
Soal No.7 Write a function to print characters between two characters (i.e. A to P ). 
Note: Prints 20 characters per line
<?php
	printChar('(','z');
	
	function printChar($from, $to){		
		$count = 0;
		foreach (range($from, $to) as $char) {
	    $count++;
	    if ($count%20 == 0) {
	    	echo $char."\n<br>";
	    }
	    else{
	    	echo $char."\n";
	    }
		}
	}
?>

	

</body>
</html>
