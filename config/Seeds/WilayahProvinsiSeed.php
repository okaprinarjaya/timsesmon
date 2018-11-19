<?php
use Migrations\AbstractSeed;

class WilayahProvinsiSeed extends AbstractSeed
{
  public function run()
  {
    $rows = _readXlsFile();
    $data = [];
    $temp = [];
    $code_pattern = 'WPR00000';

    $i = 1;
    foreach ($rows as $row) {
      $num_to_str = '' . $i;
      $num_to_str_len = strlen($num_to_str);

      if (!in_array($row['B'], $temp)) {
        $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
        $r = [
          'wilayah_prov_id' => $code,
          'election_session_id' => 'SESS01',
          'nama_prov' => trim($row['B']),
          'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
        ];
        array_push($data, $r);
        array_push($temp, trim($row['B']));
        $i++;
      }
    }

    $table = $this->table('wilayah_provinsi');
    $table->insert($data)->save();
  }
}
