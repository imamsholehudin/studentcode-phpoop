<?php 

	class Produk{
		public $judul="judul",
				$penulis = "penulis",
				$penerbit="penerbit",
				$harga= 0;

		public function getLabel(){

			return "$this->penulis, $this->penerbit";
		}

	}

	$produk1 = new Produk();
	$produk2 = new Produk();
	var_dump($produk1);
	$produk1-> judul = "Naruto";
	var_dump($produk1);
	$produk2-> judul = "Uncharted";
	var_dump($produk2);

	$produk3 = new Produk();
	$produk3->judul = "Naruto uzumaki";
	$produk3->penulis = "Masashi kishimoto";
	$produk3->penerbit = "Shenon Jump";
	$produk3->harga = 30000;

	echo $produk3->getLabel();
	echo "<hr>";


	$produk4 = new Produk();
	$produk4->judul ="Uncharted";
	$produk4->penulis = "Neil Druckman";
	$produk4->penerbit ="Sony Computer";
	$produk4->harga = 20000;

	echo $produk4->getLabel();



 ?>