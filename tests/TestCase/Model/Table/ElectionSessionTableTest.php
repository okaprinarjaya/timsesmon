<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElectionSessionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElectionSessionTable Test Case
 */
class ElectionSessionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ElectionSessionTable
     */
    public $ElectionSession;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.election_session'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ElectionSession') ? [] : ['className' => ElectionSessionTable::class];
        $this->ElectionSession = TableRegistry::getTableLocator()->get('ElectionSession', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ElectionSession);

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
