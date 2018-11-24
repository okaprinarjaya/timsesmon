<?php
use Migrations\AbstractSeed;
use \Tuupola\Ksuid;

class PenghasilanSeed extends AbstractSeed
{
  public function run()
  {
    $data = [
      [
        'penghasilan_id' => new Ksuid(),
        'penghasilan' => '< 5jt',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'penghasilan_id' => new Ksuid(),
        'penghasilan' => '5jt - 9,99jt',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'penghasilan_id' => new Ksuid(),
        'penghasilan' => '10jt - 19,99jt',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'penghasilan_id' => new Ksuid(),
        'penghasilan' => '20jt - 50jt',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'penghasilan_id' => new Ksuid(),
        'penghasilan' => '> 50jt',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ]
    ];

    $table = $this->table('penghasilan');
    $table->insert($data)->save();
  }
}
