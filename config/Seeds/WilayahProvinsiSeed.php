<?php
use Migrations\AbstractSeed;

class WilayahProvinsiSeed extends AbstractSeed
{
  public function run()
  {
    $xls_rows = _readXlsFile(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
    $data = _prepareProvinsiData($xls_rows);

    $table = $this->table('wilayah_provinsi');
    $table->insert($data)->save();
  }
}
