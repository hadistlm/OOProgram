<?php
/**
* Gabungan Antara Single,Multilevel,Hybrid & Hierarchial
*/

class Mamalia
{
		
	function menyusui()
	{
		echo "Dapat menyusui \n";
	}

	function melahirkan()
	{
		echo "Dapat melahirkan \n";
	}

	function bernafas()
	{
		echo "bernafas Dengan Paru-paru \n";
	}

	function hibernasi()
	{
		echo "Bisa Berhibernasi selama 3 bulan \n";
	}
	function tidur()
	{
		echo "Dapat Tidur dengan nyenyak \n";
	}
}

class Kucing extends Mamalia
{
	function nami()
	{
		echo "Kucing ";
	}
	
	function berbulu()
	{
		echo "Kucing Berbulu \n";
	}

	function berkumis()
	{
		echo "Kucing Berkumis \n";
	}

	function berkaki()
	{
		echo "Kucing Memiliki 4 kaki \n";
	}
}

/**
* 
*/
class Anggora extends Kucing
{
	
	function nami()
	{
		echo "Kucing Anggora ";
	}

	function lebat()
	{
		echo "Kucing Anggora Berbulu Lebat \n";
	}

	function lucu()
	{
		echo "Kucing Anggora Lucu \n";
	}
}
/**
* 
*/

class Anjing extends Mamalia
{
	function nami()
	{
		echo "Anjing ";
	}


	function berbulu()
	{
		echo "Anjing Memiliki Bulu \n";
	}

	function penurut()
	{
		echo "Anjing Hewan Penurut \n";
	}

	function bertaring()
	{
		echo "Anjing memiliki Taring \n";
	}
}

$ucing = new Kucing;
$anj = new Anjing;
$ang = new Anggora;

echo "=================\n";
$ucing->berbulu();
$ucing->berkumis();
$ucing->nami(); $ucing->tidur();

echo "=================\n";
$ang->lucu();
$ang->lebat();
$ang->nami(); $ang->menyusui();

echo "=================\n";
$anj->Berbulu();
$anj->penurut();
$anj->nami(); $anj->bernafas();

?>
