<?php
use Migrations\AbstractSeed;

class WilayahKelurahanSeed extends AbstractSeed
{
  public function run()
  {
    $xls_rows = _readXlsFile(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
    $data = _prepareKelurahanData($xls_rows);

    $table = $this->table('wilayah_kelurahan');
    $table->insert($data)->save();
  }
}
