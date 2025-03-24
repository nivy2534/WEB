<?php
$prodi = ["teknik informatika", "teknik komputer", "ilmu komputer", "sistem informasi", "teknologi informasi", "pendidikan teknologi informasi"];

foreach ($prodi as $key){
    echo $key . "<br>";
}
echo "<br>";

$daftar_tugas = ["keamanan informasi" => "incident response", "kecerdasan artificial lanjut" => "svm", "pengembangan aplikasi web" => "php"];
foreach ($daftar_tugas as $tugas => $value){
    echo "$tugas : " . $value ."<br>";    
}