<?php
	/**
	* 
	*/
	class Ayam
	{
		public $price;
		public $Bagian;

		function setPrice($par)
		{
			$this->price=$par;
		}

		function getPrice()
		{
			echo $this->price."\n";
		}

		function setBagian($par)
		{
			$this->Bagian = $par;
		}

		function getBagian()
		{
			echo $this->Bagian." : ";
		}
	}

		$paha = new Ayam;
		$dada = new Ayam;
		$sayap = new Ayam;

		$paha->setBagian("Paha Atas");
		$paha->setPrice(6000);
		$dada->setBagian("Dada");
		$dada->setPrice(5000);
		$sayap->setPrice(7000);
		$sayap->setBagian("Sayap");

		$paha->getBagian();
		$paha->getPrice();

		$dada->getBagian();
		$dada->getPrice();

		$sayap->getBagian();
		$sayap->getPrice();
?>