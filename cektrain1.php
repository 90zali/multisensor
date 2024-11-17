<?php
// buat koneksi
$konek= mysqli_connect("localhost", "root","","dbmultisensor");

$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$train1 = $data['train1'];

if($train1 == "") $train1 = 0;

echo $train1;
?>