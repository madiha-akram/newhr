<?php
namespace ContactManager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use ContactManager\Model\Table\DepartmentsTable;

/**
 * ContactManager\Model\Table\DepartmentsTable Test Case
 */
class DepartmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \ContactManager\Model\Table\DepartmentsTable
     */
    public $Departments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.ContactManager.Departments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Departments') ? [] : ['className' => DepartmentsTable::class];
        $this->Departments = TableRegistry::getTableLocator()->get('Departments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departments);

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
