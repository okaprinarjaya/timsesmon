<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PekerjaanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PekerjaanTable Test Case
 */
class PekerjaanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PekerjaanTable
     */
    public $Pekerjaan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pekerjaan',
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
        $config = TableRegistry::getTableLocator()->exists('Pekerjaan') ? [] : ['className' => PekerjaanTable::class];
        $this->Pekerjaan = TableRegistry::getTableLocator()->get('Pekerjaan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pekerjaan);

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
