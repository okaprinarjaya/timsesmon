<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ElectionSessionFixture
 *
 */
class ElectionSessionFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'election_session_id' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'nama_kegiatan' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_active' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => 'Y', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'type_area' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created_by' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'string', 'length' => 36, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'deleted' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['election_session_id'], 'length' => []],
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
                'election_session_id' => '7bcd5aea-53df-438b-9f9e-ed1f206f1635',
                'nama_kegiatan' => 'Lorem ipsum dolor sit amet',
                'is_active' => 'L',
                'type_area' => 'Lorem ipsum dolor sit amet',
                'created_by' => '64e0e2fa-4a28-4b20-b632-6f0a5e9c3a7f',
                'modified_by' => 'Lorem ipsum dolor sit amet',
                'created' => '2018-11-24 16:53:25',
                'modified' => '2018-11-24 16:53:25',
                'deleted' => 'L'
            ],
        ];
        parent::init();
    }
}
