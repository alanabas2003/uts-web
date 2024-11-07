<?php
//string function
$nama = "muhammad raden iqbal hafidz fauzi";
echo $nama;
echo '<br/>';
echo strtoupper($nama);
echo '<br/>';
echo ucwords($nama);
echo '<br/>';
echo icfirst($nama);
echo '<br/>';
echo strtolower($nama);
?>
<?php
//fungsi void
function salam($nama){
    echo "<h2> assalamualikum ".strtoupper($nama)."</h2>";
}

salam("ali");
salam("fadil");
salam();

?>
<?php
//funsi return value
function jumlah($a , $b){
    return $a + $b;
}

echo '$a + $b = '.jumlah(2,8);
?>

<?php
//membuat fungsi
function perkenalan(){
    echo "assalamua'likum, ";
    echo "perkenalkan, nama saya bedu<br/>";
    echo "senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah di buat
perkenalan();

echo "<hr/>";

//memanggil lagi
perkenalan();
?>

<?php
//membuat fungsi

function perkenalan($nama, $salam){
    echo $salam,",";
    echo " perkenalkan, nama saya ".$nama."<br/>";
    echo " senang berkenalan dengan anda<br/>";
}
//memanggil fungsi yang di buat
perkenalan("usro", "hai");

echo "<hr/>";

$saya = "bedu";
$ucapansalam =  "selamat pagi";

//memangill lagi
perkenalan($saya, $ucapansalam);
?>
<?php
//membuat fungsi
function perkenalan($nama, $salam="assalamualikum") {
    echo $salam.",";
    echo "perkenalan, nama saya ".$nama."<br/>";
    echo "sensng berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah di buat
perkenalan("jarwo", "hi");

echo "<hr>";

$saya = "bambang";
$ucapansalam = "selamat pagi";
//memanggilnya lagi tampa mengisi parameter salam
perkenalan($saya);
?>

<?php

//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="assalamualaikum"){
    echo $salam.", ";
    echo "perkenalkan, nama saya ".$nama. "<br/>";

    //memanggil funsi lain
    echo "saya berusia ". hitungUmur(1994, 2015) ." tahun<BR/>";
    echo "senang berkenalan dengang anda<br/>";
}

//memanggil funsi perkenalan
perkenalan("ardianta");
?>

<?php

function faktorial($anka) {
    if ($anka < 2) {
        return 1;
    } else{
        // memanggil dirinya sendiri
        return ($anka * faktorial($anka-1));
    }
}

//memanggil fungsi
echo "faktorial 5 adalah " . faktorial(5);
?>

<?php 
function pangkatDua($a){
    $a = $a * $a;
}
$a = 20;
echo 'sebelum nilai $a :'.$a;
pangkatDua($a);
echo '<br/> sesudah nilai $a :'.$a;
?>

<?php
function pangkatDua($a){
    global $a;
    $a = $a * $a;
}
$a = 20;
echo 'sebelum nilai $a :'.$a;
pangkatDua($a);
echo '<br/> sesudah nilai $a :'.$a;
?>