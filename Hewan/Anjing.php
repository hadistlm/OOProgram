<?php
class Anjing extends Mamalia implements Aturan
{
	private $nama;
	private $umur;

	function nami()
	{
		return "Anjing ";
	}

	function setNama($nam)
	{
		$this->nama = $nam;
	}

	function getNama()
	{
		return $this->nama;
	}

	function setUmur($umr)
	{
		$this->umur = $umr;
	}

	function getUmur()
	{
		return $this->umur;
	}
}
?>