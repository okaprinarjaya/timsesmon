<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

class WilayahKecamatanSeed extends AbstractSeed
{
  public function run()
  {
    $rows = _readXlsFile();
    $wil_kabkot_tbl = TableRegistry::getTableLocator()->get('WilayahKabkot');
    $wil_kabkot_fetch = $wil_kabkot_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
    $kabkots = \Cake\Utility\Hash::combine(
      $wil_kabkot_fetch->toArray(),
      '{n}.nama_kabkot',
      ['%s.%s', '{n}.wilayah_prov_id', '{n}.wilayah_kabkot_id']
    );

    $data = [];
    $temp = [];
    $code_pattern = 'WKC00000';

    $i = 1;
    foreach ($rows as $row) {
      $nama_prov = trim($row['B']);
      $nama_kabkot = trim($row['C']);
      $nama_kec = trim($row['D']);
      $num_to_str = '' . $i;
      $num_to_str_len = strlen($num_to_str);

      if (!in_array($nama_kec, $temp)) {
        $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
        $parent_code_split = explode('.', $kabkots[$nama_kabkot]);
        $code_prov = $parent_code_split[0];
        $code_kabkot = $parent_code_split[1];

        $r = [
          'wilayah_prov_id' => $code_prov,
          'wilayah_kabkot_id' => $code_kabkot,
          'wilayah_kec_id' => $code,
          'election_session_id' => 'SESS01',
          'nama_prov' => $nama_prov,
          'nama_kabkot' => $nama_kabkot,
          'nama_kec' => $nama_kec,
          'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
        ];
        array_push($data, $r);
        array_push($temp, $nama_kec);
        $i++;
      }
    }

    $table = $this->table('wilayah_kecamatan');
    $table->insert($data)->save();
  }
}
