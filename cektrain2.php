<?php
// buat koneksi

$konek= mysqli_connect("localhost", "root","","dbmultisensor");
$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$train2 = $data['train2'];

if($train2 == "") $train2 = 0;

echo $train2;
?>