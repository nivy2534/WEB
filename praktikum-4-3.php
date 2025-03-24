<?php

class Mahasiswa{
    public $nim;
    public $nama;
    public $prodi;

    public function kuliah(){
        return "lesgo kita kuliah" . "<br>";
    }
    public function ujian(){
        return "bismillah ujian" . "<br>";
    }
    public function praktikum(){
        return "cihuyyyy praktikum" . "<br>";
    }

}

$Mahasiswa1 = new Mahasiswa(233, "John Doe", "TIF");
$Mahasiswa2 = new Mahasiswa(234, "Jane Doe", "TIF"); 

echo "Mahasiswa1 said : " . $Mahasiswa1->kuliah();
echo "Mahasiswa2 said : " .$Mahasiswa2->praktikum();