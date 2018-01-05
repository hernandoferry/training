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

Soal No.5 menghitung jumlah kata pada suatu data string <br><br>
$string = The quick brown fox jumps over the lazy dog.

<?php

$str = "The quick brown fox jumps over the lazy dog.";
$pecah= str_word_count($str,1);
echo "<br>";
echo "Jumlah huruf vokal pada kalimat " .$str ."adalah <b> ".count($pecah) ."</b> <br><br>";
?>


	
</table>

</body>
</html>
