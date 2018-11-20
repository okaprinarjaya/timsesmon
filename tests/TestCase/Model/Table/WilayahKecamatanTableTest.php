<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WilayahKecamatanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WilayahKecamatanTable Test Case
 */
class WilayahKecamatanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WilayahKecamatanTable
     */
    public $WilayahKecamatan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wilayah_kecamatan',
        'app.wilayah_provs',
        'app.wilayah_kabkots',
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
        $config = TableRegistry::getTableLocator()->exists('WilayahKecamatan') ? [] : ['className' => WilayahKecamatanTable::class];
        $this->WilayahKecamatan = TableRegistry::getTableLocator()->get('WilayahKecamatan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WilayahKecamatan);

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
