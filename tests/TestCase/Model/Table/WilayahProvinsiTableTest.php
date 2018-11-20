<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WilayahProvinsiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WilayahProvinsiTable Test Case
 */
class WilayahProvinsiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WilayahProvinsiTable
     */
    public $WilayahProvinsi;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wilayah_provinsi',
        'app.election_sessions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('WilayahProvinsi') ? [] : ['className' => WilayahProvinsiTable::class];
        $this->WilayahProvinsi = TableRegistry::getTableLocator()->get('WilayahProvinsi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WilayahProvinsi);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
