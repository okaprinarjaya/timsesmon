<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

class WilayahKabkotSeed extends AbstractSeed
{
  public function run()
  {
    $rows = _readXlsFile();
    $wil_prov_tbl = TableRegistry::getTableLocator()->get('WilayahProvinsi');
    $wil_prov_fetch = $wil_prov_tbl->find('list', ['conditions' => ['deleted' => 'N']]);
    $provinces = array_flip($wil_prov_fetch->toArray());

    $data = [];
    $temp = [];
    $code_pattern = 'WKK00000';

    $i = 1;
    foreach ($rows as $row) {
      $nama_prov = trim($row['B']);
      $nama_kabkot = trim($row['C']);
      $num_to_str = '' . $i;
      $num_to_str_len = strlen($num_to_str);

      if (!in_array($nama_kabkot, $temp)) {
        $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
        $r = [
          'wilayah_prov_id' => $provinces[$nama_prov],
          'wilayah_kabkot_id' => $code,
          'election_session_id' => 'SESS01',
          'nama_prov' => $nama_prov,
          'nama_kabkot' => $nama_kabkot,
          'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
        ];
        array_push($data, $r);
        array_push($temp, $nama_kabkot);
        $i++;
      }
    }

    $table = $this->table('wilayah_kabkot');
    $table->insert($data)->save();
  }
}
