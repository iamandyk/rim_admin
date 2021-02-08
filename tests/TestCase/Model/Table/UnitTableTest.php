<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnitTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnitTable Test Case
 */
class UnitTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnitTable
     */
    protected $Unit;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Unit',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Unit') ? [] : ['className' => UnitTable::class];
        $this->Unit = $this->getTableLocator()->get('Unit', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Unit);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
