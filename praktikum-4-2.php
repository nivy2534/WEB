<?php
function jumlah($num1, $num2){
    return $num1 + $num2;
}

echo jumlah(2,4) . "<br>";
echo jumlah(3,5) . "<br>";

function print_panjang($string){
    return strlen($string);
}
$string = "aku suka kamu";
$string1 = "dia ga suka aku";
echo "panjang String : $string" . " " . print_panjang($string) . "<br>";
echo "panjang String : $string1" . " " . print_panjang($string1);