<?php

//class1
class Hewan
{
    private $jenis;
    private $habitat;

    function setJenis($jenis)
    {
      $this->jenis = $jenis;
    }
    function setHabitat($habitat)
    {
      $this->habitat= $habitat;
    }
    function tulis()
    {
        echo "Hewan ini merupakan jenis ".$this->jenis." yang berhabitat di ".$this->habitat;
    }
}

$salmon = new Hewan();
$salmon->setJenis('pisces');
$salmon->setHabitat('air laut');
$salmon->tulis();
echo "<br>";
$kucing = new Hewan();
$kucing->setJenis('mamalia');
$kucing->tulis();
echo "<br>";
//class2
class Kain
{
  private $ukuran;
  private $motif;

  function setMotif($motif)
  {
    $this->motif = $motif;
  }
}

$batik = new Kain;
$batik->setMotif('parangrusak');

//class3
class Persegi
{
  private $luas;

  function luas($sisi)
  {
    $this->luas= $sisi * $sisi;
  }
}

$ubin = new Persegi;
$ubin->luas(40);

//class4
class Obat
{
  private $jenis;
  private $guna;

  function indikasi($guna)
  {
    $this->guna = $guna;
  }
}

$paracetamol = new Obat;
$paracetamol->indikasi('penurun panas');

//class5
class Balok
{
  private $volume;
  private $luasPermukaan;

  function volume($panjang, $lebar, $tinggi)
  {
    $this->volume = $panjang * $lebar * $tinggi;
  }
  function tampil()
  {
      echo "Volume kubus ini adalah ".$this->volume." kubik";
  }
}

$brankas = new Balok();
$brankas->volume(7, 6, 5);
$brankas->tampil();
echo "<br>";

//class6
class Penduduk
{
  private $kewarganegaraan;
  private $jenisKelamin;

  function wargaNegara($status)
  {
    $this->kewarganegaraan = $status;
  }
  function cekStatus()
  {
      echo "Status kewarganegaraannya adalah ".$this->kewarganegaraan;
  }
}
$hirohito = new Penduduk();
$hirohito->wargaNegara('WNA');
$hirohito->cekStatus();

//class7
class Lampu
{
  private $daya;

  function watt($watt){
  $this->daya = $watt;
  }
}

$led = new Lampu();
$led->watt(42);

 //class8
class Liquid
{
  private $titikBeku;

  function beku($suhu)
  {
  $this->titikBeku = $suhu;
  }
}

$air = new Liquid;
$air->beku(0);

//class9
class Makanan
{
  private $beras;

  function olahan($olah)
  {
  $this->beras = $olah;
  }
}

$nasi = new Makanan;
$nasi->olahan('tanak');

//class10
class Minyak
{
  private $harga;

  function setHarga($harga)
  {
  $this->harga = $harga;
  }
}

$zaitun = new Minyak;
$zaitun->setHarga(60000);

//class11
class Tabel
{
  private $kolom;

  function setJumlah($jumlah)
  {
  $this->kolom = $jumlah;
  }
}

$jadwal = new Tabel;
$jadwal->setJumlah(3);

//class12
class Profesi
{
  private $macam;

  function pekerjaan($kerja)
  {
  $this->macam = $kerja;
  }
}

$nelayan = new Profesi;
$nelayan->pekerjaan('mencari ikan');

//class13
class Jabatan
{
  private $tugas;

  function setTugas($tugas)
  {
  $this->tugas= $tugas;
  }
}

$satpam = new Jabatan;
$satpam->setTugas('menjaga keamanan');

//class14
class Pemimpin
{
  private $wilayah;

  function setWilayah($wil)
  {
  $this->wilayah = $wil;
  }
}

$gubernur = new Pemimpin;
$gubernur->setWilayah('provinsi');

//class15
class Provinsi{
  private $Populasi;

  function setPopulasi($populasi)
  {
  $this->provinsi = $populasi;
  }
}

$kepri = new Provinsi;
$kepri->setPopulasi('1,679,163');

//class15
class Logam
{
  private $massaJenis;

  function setMassaJenis($massa)
  {
  $this->massaJenis = $massa;
  }
}

$emas = new Logam;
$emas->setMassaJenis('19300');

//class16
class Atmosfer
{
  private $ketinggian;

  function setTinggi($max)
  {
  $this->ketinggian = $max;
  }
}

$stratosfer = new Atmosfer;
$stratosfer->setTinggi('50');

//class17
class Kendaraan
{
  private $fungsi;

  function setFungsi($fungsi)
  {
  $this->fungsi = $fungsi;
  }
}

$tank = new Kendaraan;
$tank->setFungsi('tempur');

//class18
class Pakaian
{
  private $Letak;

  function setLetak($letak)
  {
  $this->letak = $letak;
  }
}

$celana = new Pakaian;
$celana->setLetak('kaki');

//class19
class Rumah
{
  private $tipe;

  function tipe($tipe)
  {
  $this->tipe = $tipe;
  }
}

$rumahPribadi = new Rumah;
$rumahPribadi->tipe('60');

//class20
class Alat_musik
{
  private $bahan;

  function jenisBahan($bahan){
  $this->bahan = $bahan;
  }
}

$gong = new Alat_musik;
$gong->jenisBahan('perunggu');


 ?>
