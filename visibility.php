<?php 
class Baju{
    public $merk, $ukuran;
    protected $diskon;
    private $harga;

    public function getCetak(){
        return "$this->merk, (Rp $this->harga)";
    }
    public function __construct($merk="merk", $ukuran="ukuran", $harga=1000000){
        $this->merk=$merk;
        $this->ukuran=$ukuran;
        $this->harga=$harga;
    }
    public function cetakInfo(){
        $str="{$this->merk}, {$this->getCetak()}";
        return $str;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class pakaian extends Baju{
    public $ukuran;

    public function __construct($merk, $ukuran, $harga){
        parent::__construct($merk, $harga);
        $this->ukuran=$ukuran;
    }
    public function cetakInfo(){
        $str="Pakaian: ".parent::getCetak()." | ukuran : {$this->ukuran}";
        return $str;
    }
}

$kain2 = new Baju("Gucci", "XL", 1000000);

echo $kain2->cetakInfo();
echo "<br>";
echo "<hr>";
$kain2->setDiskon(20);
echo $kain2->getHarga();

?>