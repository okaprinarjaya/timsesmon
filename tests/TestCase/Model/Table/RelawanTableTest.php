<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelawanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelawanTable Test Case
 */
class RelawanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelawanTable
     */
    public $Relawan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relawan',
        'app.election_sessions',
        'app.wilayah_provs',
        'app.wilayah_kabkots',
        'app.wilayah_kecs',
        'app.wilayah_kels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Relawan') ? [] : ['className' => RelawanTable::class];
        $this->Relawan = TableRegistry::getTableLocator()->get('Relawan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Relawan);

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
