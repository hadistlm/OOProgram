<?php
include 'Kucing.php';
include 'Anjing.php';

class TampilKuc extends Kucing
{
	function __call($method, $val)
	{
		switch ($method) {
			case 'setNama':
				$this->setNama("$val");
				break;
			
			case 'setUmur':
				$this->setUmur("$val");
				break;

			case 'nyusu':
				echo $this->nami()."Bernama ".$this->getNama()." ".$this->Menyusui();
				break;
			
			case 'bulu':
				echo $this->nami()."Bernama ".$this->getNama()." ".$this->berbulu();
				break;

			default:
				echo "Undefined Method";
				break;
		}
	}
}

class TampilJing extends Anjing
{
	function __call($method, $val)
	{
		switch ($method) {
			case 'setNama':
				$this->setNama("$val");
				break;
			
			case 'setUmur':
				$this->setUmur("$val");
				break;

			case 'nyusu':
				echo $this->nami()."Bernama ".$this->getNama()." ".$this->Menyusui();
				break;
			
			case 'bulu':
				echo $this->nami()."Bernama ".$this->getNama()." ".$this->tidur();
				break;

			default:
				echo "Undefined Method";
				break;
		}
	}
}
?>