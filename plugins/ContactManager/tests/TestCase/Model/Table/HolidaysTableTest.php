<?php
namespace ContactManager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use ContactManager\Model\Table\HolidaysTable;

/**
 * ContactManager\Model\Table\HolidaysTable Test Case
 */
class HolidaysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \ContactManager\Model\Table\HolidaysTable
     */
    public $Holidays;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.ContactManager.Holidays',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Holidays') ? [] : ['className' => HolidaysTable::class];
        $this->Holidays = TableRegistry::getTableLocator()->get('Holidays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Holidays);

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
