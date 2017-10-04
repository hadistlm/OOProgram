<?php
/**
* 
*/
error_reporting(0);

class aplikasi
{
	
	function __call($method, $value)
	{
		if ($method === "findFahre") {
			echo "Suhu Dalam Fahrenheit Adalah : ". $this->_getFahre($value);
		}elseif ($method ==="findCelci") {
			echo "Suhu Dalam Celcius Adalah : ".
			$this->_getCelci($value);
		}else{
			echo "Tidak Ditemukan Method $method";
		}
	}

	function _getFahre($value){
		$number = implode('',$value);
		$hasil = ($number*9/5)+32;
		return $hasil;
	}

	function _getCelci($value)
	{
		$number = implode('',$value);
		$hasil = ($number-32)/1.8;
		return $hasil;
	}
}

$test = new aplikasi;

$test->findFahre(30);
echo "\n";
$test->findCelci(100);
echo "\n";
$test->Bungkus();
?>