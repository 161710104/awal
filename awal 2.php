<?php
//kucing
class diandra {
	public $jeniskelamin = '148';
	public $kaki = 2;
	public $warnakulit = 'Sawo Matang';
	public $warnarambut = 'Hitam';
	public $tinggi = 148;
	public $berat = 42;

}
$diandra1 = new diandra;
echo "<h3>Ciri - Ciri Diandra</h3>";
echo "Jenis Kelamin = ".$diandra1-> jeniskelamin.'<br>';
echo "Mempunyai Kaki = ".$diandra1-> kaki.'<br>';
echo "Berwarna Kulit = ".$diandra1-> warnakulit.'<br>';
echo "Rambutnya Berwarna = ".$diandra1-> warnarambut.'<br>';
echo "Tinggi= ".$diandra1-> tinggi.'cm','<br>';
echo "Berat = ".$diandra1-> berat.'kg','<br>';