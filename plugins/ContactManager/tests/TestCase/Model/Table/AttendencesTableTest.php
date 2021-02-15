<?php
namespace ContactManager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use ContactManager\Model\Table\AttendencesTable;

/**
 * ContactManager\Model\Table\AttendencesTable Test Case
 */
class AttendencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \ContactManager\Model\Table\AttendencesTable
     */
    public $Attendences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.ContactManager.Attendences',
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
        $config = TableRegistry::getTableLocator()->exists('Attendences') ? [] : ['className' => AttendencesTable::class];
        $this->Attendences = TableRegistry::getTableLocator()->get('Attendences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attendences);

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
