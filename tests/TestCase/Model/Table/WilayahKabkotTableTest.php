<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WilayahKabkotTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WilayahKabkotTable Test Case
 */
class WilayahKabkotTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WilayahKabkotTable
     */
    public $WilayahKabkot;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wilayah_kabkot',
        'app.wilayah_provs',
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
        $config = TableRegistry::getTableLocator()->exists('WilayahKabkot') ? [] : ['className' => WilayahKabkotTable::class];
        $this->WilayahKabkot = TableRegistry::getTableLocator()->get('WilayahKabkot', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WilayahKabkot);

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
