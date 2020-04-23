<div align="center">

<?php

$wilayah = $_POST[wilayah];

$JumlahPositif = $_POST[JumlahPositif];

$JumlahDirawat= $_POST[JumlahDirawat];

$JumlahSembuh = $_POST[JumlahSembuh];

$JumlahMeninggal = $_POST[JumlahMeninggal];

$NamaOperator = $_POST[NamaOperator];

$NIM = $_POST[NIM];

$nf = "data.txt";

$file = fopen($nf,"w");

fwrite($file,"$wilayah-$JumlahPositif-$JumlahDirawat-$JumlahSembuh-$JumlahMeninggal-$NamaOperator-$NIM");

fclose($file);

date_default_timezone_set('Asia/jakarta');

$time = time();

$tanggal = date('d F Y H:i:s', $time);

echo "Data Pemantauan Covid19 wilayah $wilayah";

echo "<br>";

echo "Per $tanggal)";

echo "<br>";

echo "$NamaOperator/$NIM";

echo "<br>";

echo "<br>";

echo "
<style>
table, td{
	align: left;
	border-collapse: collapse;
	padding: 15px;
	margin: 5px;
}
</style>
<table border='1px black solid'>
    <tr>
        <td>Positif</td>
        <td>Dirawat</td>
        <td>Sembuh</td>
	<td>Meninggal</td>
    </tr>
    <tr>
        <td>$JumlahPositif</td>
        <td>$JumlahDirawat</td>
        <td>$JumlahSembuh</td>
	<td>$JumlahMeninggal</td>
    </tr>
</table>";
?>
</div>
