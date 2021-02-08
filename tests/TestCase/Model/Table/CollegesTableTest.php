<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollegesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollegesTable Test Case
 */
class CollegesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CollegesTable
     */
    protected $Colleges;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Colleges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Colleges') ? [] : ['className' => CollegesTable::class];
        $this->Colleges = $this->getTableLocator()->get('Colleges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Colleges);

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
