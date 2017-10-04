<?php

abstract class Mangrupa
{
	abstract protected function prefix($val);
}

class Hasil extends Mangrupa
{
	
	function prefix($val, $sep = ":")
	{
		switch ($val) {
			case 'laki':
				$hasil = "Anda Seorang Laki-laki";
				break;

			case 'per':
				$hasil = "Anda Seorang Perempuan";
				break;
			
			default:
				$hasil = "";
				break;
		}
		return "$sep $hasil";
	}
}

$hasil = new Hasil;
echo "Dadan Adalah ".$hasil->prefix("laki");

?>