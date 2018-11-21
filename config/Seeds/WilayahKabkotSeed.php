<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

class WilayahKabkotSeed extends AbstractSeed
{
  public function run()
  {
    $xls_rows = _readXlsFile(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
    $data = _prepareKabkotData($xls_rows);

    $table = $this->table('wilayah_kabkot');
    $table->insert($data)->save();
  }
}
