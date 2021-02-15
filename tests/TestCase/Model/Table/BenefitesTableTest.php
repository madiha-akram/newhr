<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BenefitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BenefitesTable Test Case
 */
class BenefitesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BenefitesTable
     */
    public $Benefites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Benefites',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Benefites') ? [] : ['className' => BenefitesTable::class];
        $this->Benefites = TableRegistry::getTableLocator()->get('Benefites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Benefites);

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
