<?php
use \PhpOffice\PhpSpreadsheet\Reader\Xls;

function _readXlsFile()
{
  $xlsx_reader = new Xls();
  $sheet = $xlsx_reader->load(WWW_ROOT . 'files' . DS . 'relawan-wilayah.xls');
  $rows = $sheet->getActiveSheet()->toArray(null, true, true, true);

  unset($rows[1]);

  return $rows;
}
