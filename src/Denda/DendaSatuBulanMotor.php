<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaSatuBulanMotor implements DendaSatuBulan
{

  public function getDendaSatuBulan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);

    $totalDenda = $pkb * 0.25;

    return $totalDenda;
  }
}
