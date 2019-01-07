<?php
$nama = " ikhwan ";
$kelas = " XI ";
$alamat = " Malang ";
function tampil_nama(){
    global $nama,$kelas,$alamat;
    echo " Nama saya ".$nama;
    echo "<br>";
    echo " kelas ".$kelas;
    echo "<br>";
    echo " alamat ".$alamat;
}
tampil_nama();
?>