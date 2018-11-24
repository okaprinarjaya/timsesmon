<?php
use Migrations\AbstractSeed;
use \Tuupola\Ksuid;

class PekerjaanSeed extends AbstractSeed
{
  public function run()
  {
    $data = [
      [
        'pekerjaan_id' => new Ksuid(),
        'pekerjaan' => 'Wirausaha (Entrepreneur)',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'pekerjaan_id' => new Ksuid(),
        'pekerjaan' => 'ASN/PNS',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'pekerjaan_id' => new Ksuid(),
        'pekerjaan' => 'Karyawan Swasta',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'pekerjaan_id' => new Ksuid(),
        'pekerjaan' => 'Dosen/Guru/Staff Ahli',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'pekerjaan_id' => new Ksuid(),
        'pekerjaan' => 'Lain-lain',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ]
    ];

    $table = $this->table('pekerjaan');
    $table->insert($data)->save();
  }
}
