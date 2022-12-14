<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakTahunPertamaMobil implements PajakTahunPertama
{
  private $swdkllj;
  private $biayaAdministrasi;
  private $biayaAdministrasiPenerbitanSTNK;

  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMobil();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMobil();
    $this->biayaAdministrasiPenerbitanSTNK = BiayaAdministrasi::penerbitanStnkMobil();
  }

  public function getPajakTahunPertama(float $nilaiJualKendaraan)
  {
    $bbnkb = PajakUtil::hitungBBNKBMobil($nilaiJualKendaraan);
    $pkb = PajakUtil::hitungPKBMobil($nilaiJualKendaraan);
    $jumlahPajak = $bbnkb + $pkb + $this->swdkllj + $this->biayaAdministrasi + $this->biayaAdministrasiPenerbitanSTNK;

    return $jumlahPajak;
  }
}
