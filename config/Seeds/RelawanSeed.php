<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

class RelawanSeed extends AbstractSeed
{
  public function run()
  {
    $rows = _readXlsFile();
    $wil_kel_tbl = TableRegistry::getTableLocator()->get('WilayahKelurahan');
    $wil_kel_fetch = $wil_kel_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
    $kelurahans = \Cake\Utility\Hash::combine(
      $wil_kel_fetch->toArray(),
      '{n}.nama_kel',
      [
        '%s.%s.%s.%s',
        '{n}.wilayah_prov_id',
        '{n}.wilayah_kabkot_id',
        '{n}.wilayah_kec_id',
        '{n}.wilayah_kel_id'
      ]
    );

    $data = [];
    $temp = [];

    foreach ($rows as $row) {
      $username = trim($row['A']);
      $nama_prov = trim($row['B']);
      $nama_kabkot = trim($row['C']);
      $nama_kec = trim($row['D']);
      $nama_kel = trim($row['E']);

      if (!in_array($username, $temp)) {
        $parent_code_split = explode('.', $kelurahans[$nama_kel]);
        $code_prov = $parent_code_split[0];
        $code_kabkot = $parent_code_split[1];
        $code_kec = $parent_code_split[2];
        $code_kel = $parent_code_split[3];

        $r = [
          'username' => $username,
          'password' => '123',
          'election_session_id' => 'SESS01',
          'wilayah_prov_id' => $code_prov,
          'wilayah_kabkot_id' => $code_kabkot,
          'wilayah_kec_id' => $code_kec,
          'wilayah_kel_id' => $code_kel,
          'nama_prov' => $nama_prov,
          'nama_kabkot' => $nama_kabkot,
          'nama_kec' => $nama_kec,
          'nama_kel' => $nama_kel,
          'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
        ];
        array_push($data, $r);
        array_push($temp, $username);
      }
    }

    $table = $this->table('relawan');
    $table->insert($data)->save();
  }
}
