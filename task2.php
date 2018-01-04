<?php

// $color = array('white', 'green', 'red', 'blue', 'black');
// echo "Soal No 1";
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the"; echo $color[2];
// echo "carpet, the green lawn, the"; echo $color[0]; echo "house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// echo "</br></br></br>";

// echo "Soal No 2";

// echo "<ul>";
// echo "<li style='color:red'>";
// echo $color[2];
// echo "</li>";
// echo "<li style='color:green'>";
// echo $color[1];
// echo "</li>";
// echo "<li style='color:blue'>";
// echo $color[3];
// echo "</li>";
// echo "</ul>";
// echo "</br>";


// echo "Soal No.3"; //assosiatif array 
// echo "<br>";
// $ceu = array( 	"Italy"=>"Rome", 
// 				"Luxembourg"=>"Luxembourg",
// 				"Belgium"=> "Brussels",
// 				"Denmark"=>"Copenhagen",
// 				"Finland"=>"Helsinki",
// 				"France" => "Paris",
// 				"Slovakia"=>"Bratislava",
// 				"Slovenia"=>"Ljubljana",
// 				"Germany" => "Berlin",
// 				"Greece" => "Athens", 
// 				"Ireland"=>"Dublin",
// 				"Netherlands"=>"Amsterdam",
// 				"Portugal"=>"Lisbon",
// 				"Spain"=>"Madrid",
// 				"Sweden"=>"Stockholm",
// 				"United Kingdom"=>"London",
// 				"Cyprus"=>"Nicosia",
// 				"Lithuania"=>"Vilnius",
// 				"Czech Republic"=>"Prague",
// 				"Estonia"=>"Tallin",
// 				"Hungary"=>"Budapest",
// 				"Latvia"=>"Riga", 
// 				"Malta"=>"Valetta", 
// 				"Austria" => "Vienna", 
// 				"Poland"=>"Warsaw"
// 				) ;
// asort($ceu);
// foreach ($ceu as $cap => $value) 
// {
// 	echo "The Capital of &nbsp;" . $cap . "&nbsp; is &nbsp;" . $value;
// 	echo "</br>";
// }

// echo "</br></br></br>";
// echo "Soal No.4";//assosiatif array
// echo "<br>";
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// $get_utama=reset($color);
// echo $get_utama;
// echo "</br></br></br>";

// echo "Soal No.8 <br>";
// $data=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// asort($data);
// echo "Pengurutan ascending array asosiatif berdasarkan value </br>";
// foreach ($data as $key => $value) {
	
// 	echo $key. "&nbsp;" .$value;
// 	echo "</br>";
// }

// ksort($data);
// echo "Pengurutan ascending array asosiatif berdasarkan key <br> ";
// foreach ($data as $key => $value) {
// 	echo $key. "&nbsp;" . $value;
// 	echo "<br>";
// }

// arsort($data);
// echo "Pengurutan descending array assosiatif berdasarkan nilai <br>";
// foreach ($data as $key => $value) {
// 	echo $key. "&nbsp;" .$value;
// 	echo "<br>";
// }

// krsort($data);
// echo "Pengurutan descending array assosiatif berdasarkan key <br>";
// foreach ($data as $key => $value) {
// 	echo $key. "&nbsp;" .$value;
// 	echo "<br>";
// }

// echo "<br><br>";

// echo "Soal no.14 <br>";
// $huruf = array("abcd","abc","de","hjjj","g","wer");
// $cari= array_map('strlen',$huruf);

// echo "Longest &nbsp;" .$huruf [min($cari)] ."&nbsp;" .min($cari)."<br>";
// echo "shortles &nbsp;" .$huruf [max($cari)] ."&nbsp;" .max($cari);


// echo "Soal No.15 <br>";
// $rentang_pengacakan=range(11,20);
// shuffle($rentang_pengacakan);
// for ($x=0; $x< 10; $x++)
// {
// echo $rentang_pengacakan[$x].' ';
// }
// echo "<br>";

// echo "Soal No.16 <br>";

// $negara = array('Indonesia' => "Jakarta" , 'Singapura'=>"Singapura", 'Thailand'=> "Bangkok" );
// $cari= max(array_keys($negara));
// echo $cari;

// function bukan_enol(Array $values) 
// {
// return min(array_diff(array_map('intval', $values), array(0)));
// }
// echo "Soal No.17 <br>";
// echo (bukan_enol(array(1,2,3,4,5,0,-1,-2,-3,-4,-5))."\n");


// $colors = array( "Red", "Green", "Black", "White"); 
// echo "Soal No.36 <br>";
// print_r($colors);
// echo "<br>";
// $normal = array_map('strtolower', $colors);
// print_r($normal);
// echo "<br>";
// $kapital = array_map('strtoupper', $colors);
// print_r($kapital);


// function count_array_values($my_array, $match) 
// { 
//     $count = 0; 
    
//     foreach ($my_array as $key => $value) 
//     { 
//         if ($value == $match) 
//         { 
//             $count++; 
//         } 
//     } 
    
//     return $count; 
// } 

// $colors = array("c1"=>"tiga kali", "c2"=>"tiga kali", "c3"=>"Yellow", "c4"=>"tiga kali");

// echo "\n"." kata <b>tiga kali</b> muncul ".count_array_values($colors, "tiga kali"). " x. pada Array"."<br>"; 


// $temperatur_sampel = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// $pisah = explode(',', $temperatur_sampel);
// $tot_temp = 0;
// $pisah_length = count($pisah);
// foreach($pisah as $temp)
// {
//  $tot_temp += $temp;
// }
//  $avg_high_temp = $tot_temp/$pisah_length;
//  echo "Rata-rata Temperatur : ".$avg_high_temp."<br>"; 
// sort($pisah);
// echo " 5 Temperatur terendah : <br>";
// for ($i=0; $i< 5; $i++)
// { 
// echo $pisah[$i]."&nbsp; <br>";
// }
// echo "5 Temperatur tertinggi :<br>";
// for ($i=($pisah_length-5); $i< ($pisah_length); $i++)
// {
// echo $pisah[$i]." &nbsp; ";
// }


$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n"




?> 