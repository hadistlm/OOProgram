<?php

/**
* 
*/
class Manuksia
{
	private $nama;
	private $umur;
	private $ag;

	function __construct($n, $a)
	{
		$this->nama = $n;
		$this->age = $a;
	}

	function setUmur($ag){
		$this->ag=$ag;
	}
	
	function kurangkan(){
		return $this->age - $this->ag;
	}

	function getNama(){
		echo "Selamat Datang, ".$this->nama." \n";
	}
}


$manusia = new Manuksia("Dadan", 99);
$manusia->setUmur(20);

echo $manusia->getNama();
echo "Umur Anda : ".$manusia->kurangkan();
?>