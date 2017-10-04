<?php
/**
* 
*/
class Fak{
	
	function ngomong()
	{
		return "Hai\n";
	}
}

/**
* 
*/
class Yu extends Fak{
	
	function ngomong()
	{
		return "Halo";
	}
}

$fak = new Fak;
$yu = new Yu;

echo $fak->ngomong();
echo $yu->ngomong();
?>