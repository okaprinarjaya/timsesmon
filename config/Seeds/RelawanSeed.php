<?php
use Migrations\AbstractSeed;

class RelawanSeed extends AbstractSeed
{
  public function run()
  {
    $xls_rows = _readXlsFile(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
    $data = _prepareRelawanData($xls_rows);

    $table = $this->table('relawan');
    $table->insert($data)->save();
  }
}
