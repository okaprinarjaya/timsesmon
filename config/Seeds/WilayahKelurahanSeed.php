<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

class WilayahKelurahanSeed extends AbstractSeed
{
  public function run()
  {
    $rows = _readXlsFile();
    $wil_kec_tbl = TableRegistry::getTableLocator()->get('WilayahKecamatan');
    $wil_kec_fetch = $wil_kec_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
    $kecamatans = \Cake\Utility\Hash::combine(
      $wil_kec_fetch->toArray(),
      '{n}.nama_kec',
      ['%s.%s.%s', '{n}.wilayah_prov_id', '{n}.wilayah_kabkot_id', '{n}.wilayah_kec_id']
    );

    $data = [];
    $temp = [];
    $code_pattern = 'WKL00000';

    $i = 1;
    foreach ($rows as $row) {
      $nama_prov = trim($row['B']);
      $nama_kabkot = trim($row['C']);
      $nama_kec = trim($row['D']);
      $nama_kel = trim($row['E']);
      $num_to_str = '' . $i;
      $num_to_str_len = strlen($num_to_str);

      if (!in_array($nama_kel, $temp)) {
        $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
        $parent_code_split = explode('.', $kecamatans[$nama_kec]);
        $code_prov = $parent_code_split[0];
        $code_kabkot = $parent_code_split[1];
        $code_kec = $parent_code_split[2];

        $r = [
          'wilayah_prov_id' => $code_prov,
          'wilayah_kabkot_id' => $code_kabkot,
          'wilayah_kec_id' => $code_kec,
          'wilayah_kel_id' => $code,
          'election_session_id' => 'SESS01',
          'nama_prov' => $nama_prov,
          'nama_kabkot' => $nama_kabkot,
          'nama_kec' => $nama_kec,
          'nama_kel' => $nama_kel,
          'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
        ];
        array_push($data, $r);
        array_push($temp, $nama_kel);
        $i++;
      }
    }

    $table = $this->table('wilayah_kelurahan');
    $table->insert($data)->save();
  }
}
