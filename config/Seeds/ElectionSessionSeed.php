<?php
use Migrations\AbstractSeed;

class ElectionSessionSeed extends AbstractSeed
{
  public function run()
  {
    $data = [
      [
        'election_session_id' => 'SESS01',
        'nama_kegiatan' => 'Election session',
        'type_area' => 'KABUPATEN',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ]
    ];

    $table = $this->table('election_session');
    $table->insert($data)->save();
  }
}
