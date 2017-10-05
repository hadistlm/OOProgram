<?php
include 'Proses.php';

$tampil = new TampilKuc;
$jing = new TampilJing;

$tampil->setNama("Dadan");
$tampil->setUmur(20);

echo "Nama ".$tampil->nami().": ".$tampil->getNama()."\n";
echo "Umur ".$tampil->nami().": ".$tampil->getUmur()."\n";
$tampil->nyusu();
$tampil->bulu();

echo "\n========================================\n";
$jing->setNama("Didin");
$jing->setUmur(12);

echo "Nama ".$jing->nami().": ".$jing->getNama()."\n";
echo "Umur ".$jing->nami().": ".$jing->getUmur()."\n";
$jing->nyusu();
$jing->bulu();

?>