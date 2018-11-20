<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WilayahKelurahanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WilayahKelurahanTable Test Case
 */
class WilayahKelurahanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WilayahKelurahanTable
     */
    public $WilayahKelurahan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wilayah_kelurahan',
        'app.wilayah_provs',
        'app.wilayah_kabkots',
        'app.wilayah_kecs',
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
        $config = TableRegistry::getTableLocator()->exists('WilayahKelurahan') ? [] : ['className' => WilayahKelurahanTable::class];
        $this->WilayahKelurahan = TableRegistry::getTableLocator()->get('WilayahKelurahan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WilayahKelurahan);

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
