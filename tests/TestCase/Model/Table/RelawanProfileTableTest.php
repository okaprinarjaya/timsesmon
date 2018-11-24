<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelawanProfileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelawanProfileTable Test Case
 */
class RelawanProfileTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelawanProfileTable
     */
    public $RelawanProfile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relawan_profile',
        'app.relawans',
        'app.election_sessions',
        'app.usias',
        'app.pekerjaans',
        'app.penghasilans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RelawanProfile') ? [] : ['className' => RelawanProfileTable::class];
        $this->RelawanProfile = TableRegistry::getTableLocator()->get('RelawanProfile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RelawanProfile);

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
