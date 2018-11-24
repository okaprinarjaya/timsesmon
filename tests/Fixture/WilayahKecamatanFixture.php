<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WilayahKecamatanFixture
 *
 */
class WilayahKecamatanFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'wilayah_prov_id' => ['type' => 'string', 'fixed' => true, 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'wilayah_kabkot_id' => ['type' => 'string', 'fixed' => true, 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'wilayah_kec_id' => ['type' => 'string', 'fixed' => true, 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'election_session_id' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'nama_prov' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nama_kabkot' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nama_kec' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created_by' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'string', 'length' => 36, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'deleted' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['wilayah_kec_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'wilayah_prov_id' => 'Lorem ',
                'wilayah_kabkot_id' => 'Lorem ',
                'wilayah_kec_id' => '0b4eac1c-79bd-47b4-887e-a5348d728945',
                'election_session_id' => 'Lore',
                'nama_prov' => 'Lorem ipsum dolor sit amet',
                'nama_kabkot' => 'Lorem ipsum dolor sit amet',
                'nama_kec' => 'Lorem ipsum dolor sit amet',
                'created_by' => '422c2f1e-6682-4726-ad4d-f8435e5deae3',
                'modified_by' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-11-24 16:51:28',
                'modified' => '2018-11-24 16:51:28',
                'deleted' => 'L'
            ],
        ];
        parent::init();
    }
}
