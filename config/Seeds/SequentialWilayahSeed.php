<?php
use Migrations\AbstractSeed;

class SequentialWilayahSeed extends AbstractSeed
{
  public function run()
  {
    $this->call('WilayahProvinsiSeed');
    $this->call('WilayahKabkotSeed');
    $this->call('WilayahKecamatanSeed');
    $this->call('WilayahKelurahanSeed');
  }
}
