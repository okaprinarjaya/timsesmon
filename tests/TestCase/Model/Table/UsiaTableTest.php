<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsiaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsiaTable Test Case
 */
class UsiaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsiaTable
     */
    public $Usia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Usia') ? [] : ['className' => UsiaTable::class];
        $this->Usia = TableRegistry::getTableLocator()->get('Usia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usia);

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
