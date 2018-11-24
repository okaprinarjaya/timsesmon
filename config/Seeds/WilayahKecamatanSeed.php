<?php
use Migrations\AbstractSeed;

class WilayahKecamatanSeed extends AbstractSeed
{
  public function run()
  {
    $xls_rows = _readXlsFile(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
    $data = _prepareKecamatanData($xls_rows);

    $table = $this->table('wilayah_kecamatan');
    $table->insert($data)->save();
  }
}
