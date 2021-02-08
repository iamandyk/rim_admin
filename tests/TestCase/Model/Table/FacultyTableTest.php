<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacultyTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacultyTable Test Case
 */
class FacultyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacultyTable
     */
    protected $Faculty;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Faculty',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Faculty') ? [] : ['className' => FacultyTable::class];
        $this->Faculty = $this->getTableLocator()->get('Faculty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Faculty);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
