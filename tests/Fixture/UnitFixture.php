<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UnitFixture
 */
class UnitFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Unit';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'Unit' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'UnitName' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'College' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Inactive' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Unit_College' => ['type' => 'index', 'columns' => ['College'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Unit'], 'length' => []],
            'FK_Unit_College' => ['type' => 'foreign', 'columns' => ['College'], 'references' => ['College', 'College'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Unit' => '389867e2-c82d-41aa-b524-a28060089e37',
                'UnitName' => 'Lorem ipsum dolor sit amet',
                'College' => 'Lorem ipsum dolor sit amet',
                'Inactive' => 1,
            ],
        ];
        parent::init();
    }
}
