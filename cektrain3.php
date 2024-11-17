<?php
// buat koneksi

$konek= mysqli_connect("localhost", "root","","dbmultisensor");
$sql = mysqli_query($konek, "select * from tb_sensor order by id desc");

$data = mysqli_fetch_array($sql);
$train3 = $data['train3'];

if($train3 == "") $train3 = 0;

echo $train3;
?>