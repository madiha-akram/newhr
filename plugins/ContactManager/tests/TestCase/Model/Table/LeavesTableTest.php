<?php
namespace ContactManager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use ContactManager\Model\Table\LeavesTable;

/**
 * ContactManager\Model\Table\LeavesTable Test Case
 */
class LeavesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \ContactManager\Model\Table\LeavesTable
     */
    public $Leaves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.ContactManager.Leaves',
        'plugin.ContactManager.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Leaves') ? [] : ['className' => LeavesTable::class];
        $this->Leaves = TableRegistry::getTableLocator()->get('Leaves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Leaves);

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
