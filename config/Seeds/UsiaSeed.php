<?php
use Migrations\AbstractSeed;
use \Tuupola\Ksuid;

class UsiaSeed extends AbstractSeed
{
  public function run()
  {
    $data = [
      [
        'usia_id' => new Ksuid(),
        'usia' => '17 - 22',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'usia_id' => new Ksuid(),
        'usia' => '23 - 28',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'usia_id' => new Ksuid(),
        'usia' => '29 - 35',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'usia_id' => new Ksuid(),
        'usia' => '36 - 45',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'usia_id' => new Ksuid(),
        'usia' => '45 - 60',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ],
      [
        'usia_id' => new Ksuid(),
        'usia' => '> 60',
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ]
    ];

    $table = $this->table('usia');
    $table->insert($data)->save();
  }
}
