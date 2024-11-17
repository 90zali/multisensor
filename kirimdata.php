<?php

$konek= mysqli_connect("localhost", "root","","dbmultisensor");
//baca data yang dikirim
$train1 = $_GET['train1'];
$train2 = $_GET['train2'];
$train3 = $_GET['train3'];

//simpan ke tb_sensor

//suto increment =1
mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
//simpan data ke tabel sensor
$simpan = mysqli_query($konek,"insert into tb_sensor(train1, train2, train3)values('$train1', '$train2', '$train3')");

//uji simpan untuk respon

if($simpan){
echo"berhasil dikirim";

}else{
echo "gagal terkirim";}
?>