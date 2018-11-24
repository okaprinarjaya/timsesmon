<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;
use \Tuupola\Ksuid;

class RelawanProfileSeed extends AbstractSeed
{
  public function run()
  {
    $relawan_tbl = TableRegistry::getTableLocator()->get('Relawan');
    $usia_tbl = TableRegistry::getTableLocator()->get('Usia');
    $pekerjaan_tbl = TableRegistry::getTableLocator()->get('Pekerjaan');
    $penghasilan_tbl = TableRegistry::getTableLocator()->get('Penghasilan');

    $relawan_fetch = $relawan_tbl->find('all', [
      'order' => ['Relawan.username' => 'ASC'],
      'limit' => 2
    ]);
    $usia = $usia_tbl->find('all')->first();
    $pekerjaan = $pekerjaan_tbl->find('all')->first();
    $penghasilan = $penghasilan_tbl->find('all')->first();
    $gender = [1 => 'P', 2 => 'W'];

    $data = [];

    $x = 1;
    foreach ($relawan_fetch as $relawan) {
      $r = [
        'relawan_id' => $relawan->relawan_id,
        'nama' => 'Mister Relawan 00' . $x,
        'election_session_id' => 'SESS01',
        'gender' => $gender[$x],
        'usia_id' => $usia->usia_id,
        'pekerjaan_id' => $pekerjaan->pekerjaan_id,
        'penghasilan_id' => $penghasilan->penghasilan_id,
        'email' => 'relawan001@timsesmon.com',
        'phonenumber' => '0817412830' . $x,
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      $x++;

      array_push($data, $r);
    }

    $table = $this->table('relawan_profile');
    $table->insert($data)->save();
  }
}
