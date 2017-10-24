<?php
//kucing
class kucing {
	public $kaki = 4;
	public $warna = 'Hitam berpadu Putih';

}
$kucing1 = new kucing;
echo "<h3>KUCING</h3>";
echo "Kucing Mempunyai kaki = ".$kucing1-> kaki.'<br>';
echo "Dan Kucinnya Berwarna = ".$kucing1-> warna.'<br>';



//sapi
class sapi {
	public $tinggi = 148;
	public $berat = 102;

}

$sapi1 = new sapi;
echo "<h3>SAPI</h3>";
echo "Sapi Mempunyai tinggi = ".$sapi1-> tinggi. ' cm','<br>';
echo "Dan Berat Sapi = ".$sapi1-> berat.' Kg','<br>';



//manusia
class manusia {
	public $Kulit = 'Sawo Matang';
	public $rambut = 'Hitam';

}

$manusia1 = new manusia;
echo "<h3>MANUSIA</h3>";
echo "Manusia Mempunyai Kulit Berwarna = ".$manusia1-> Kulit.'<br>';
echo "Dan Mempunyai rambut Berwarna = ".$manusia1-> rambut.'<br>';



//Beca
class Beca {
	public $Maxmuatan = 80;
	public $Roda = 3;

}

$beca1 = new beca;
echo "<h3>BECA</h3>";
echo "Beca Memiliki Maximal Muatan = ".$beca1-> Maxmuatan.' Kg','<br>';
echo "Dan Mempunyai Roda = ".$beca1-> Roda;




//telivisi
class televisi {
	public $ukuranlebar = 100;
	public $ukurantinggi = 120;
	public $ukuraninci = 6;

}

$televisi1 = new televisi;
echo "<h3>TELEVISI</h3>";
echo "Televisi Mempunyai Ukuran Lebar = ".$televisi1-> ukuranlebar . ' cm','<br>';
echo "Televisi Mempunyai Ukuran Tinggi = ".$televisi1-> ukurantinggi . ' cm','<br>';
echo "Televisi Mempunyai Ukuran inci = ".$televisi1-> ukuraninci .' inci','<br>';



?>