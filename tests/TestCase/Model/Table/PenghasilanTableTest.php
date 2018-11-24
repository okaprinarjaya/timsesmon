<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PenghasilanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PenghasilanTable Test Case
 */
class PenghasilanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PenghasilanTable
     */
    public $Penghasilan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.penghasilan',
        'app.relawan_profile'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Penghasilan') ? [] : ['className' => PenghasilanTable::class];
        $this->Penghasilan = TableRegistry::getTableLocator()->get('Penghasilan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Penghasilan);

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
}
