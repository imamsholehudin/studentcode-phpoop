<?php 

	class Produk{

		public $judul,
				$penulis,
				$penerbit,
				$harga,
				$jmlHalaman,
				$waktuMain;

		public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0, $waktuMain=0,$tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
			$this->tipe = $tipe;
		}

		public function getLabel(){

			return "$this->penulis, $this->penerbit";
		}

		public function getInfoProduk(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp.{$this->harga})";
			if($this->tipe == "Komik"){
				$str .= "- {$this->jmlHalaman} Halaman";
			}else if($this->tipe == "Game"){
				$str .= "- {$this->waktuMain} Jam";
			}
			return $str;

		}

	}

	class Komik extends Produk{
		//public $jmlHalaman;
		public function getInfoProduk(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp.{$this->harga})- {$this->jmlHalaman} Halaman";
			return $str;
		}

	}

	class Game extends Produk{
		public function getInfoProduk(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp.{$this->harga})- {$this->waktuMain} Jam";
			return $str;
		}
	}

	class CetakInfoProduk{
		public function cetak(Produk $produk){
			$str = "{$produk->judul} | {$produk->penulis}";
			return $str;

		}
	}


	
	

	$produk3 = new Komik("Naruto uzumaki","Masashi Kishimoto", "Shenon Jump",30000,100,0,"Komik");
	$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 20000,0, 50, "Game");	
	$produk5 = new Game("TMNT", "Kimoto","Ubisoft",34000,0,75,"Game");


	echo $produk3->getInfoProduk();
	echo "<br>";
	echo $produk4->getInfoProduk();






 ?>