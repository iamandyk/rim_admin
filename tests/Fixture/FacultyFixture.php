<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacultyFixture
 */
class FacultyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Faculty';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'FacID' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'LastName' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'FirstName' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Admin' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'UnitAdmin' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Pwd' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Username' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Email' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'CollegeAdmin' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Ignore' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'AdminUnit' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Inactive' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'TenureTrack' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'Telephone' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Address' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Website' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'PctFullTime' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => '100', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'GrantsOnly' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'NC' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'maineedu_email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['FacID'], 'length' => []],
            'IX_UserName' => ['type' => 'unique', 'columns' => ['Username'], 'length' => []],
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
                'FacID' => '580dca06-9b49-4d47-a60f-4a7bcd458d50',
                'LastName' => 'Lorem ipsum dolor sit amet',
                'FirstName' => 'Lorem ipsum dolor sit amet',
                'Admin' => 1,
                'UnitAdmin' => 'Lorem ipsum dolor sit amet',
                'Pwd' => 'Lorem ipsum dolor sit amet',
                'Username' => 'Lorem ipsum dolor sit amet',
                'Email' => 'Lorem ipsum dolor sit amet',
                'CollegeAdmin' => 'Lorem ipsum dolor sit amet',
                'Ignore' => 1,
                'AdminUnit' => 'Lorem ipsum dolor sit amet',
                'Inactive' => 1,
                'TenureTrack' => 1,
                'Telephone' => 'Lorem ipsum dolor sit amet',
                'Address' => 'Lorem ipsum dolor sit amet',
                'Website' => 'Lorem ipsum dolor sit amet',
                'PctFullTime' => 1,
                'GrantsOnly' => 1,
                'NC' => 1,
                'maineedu_email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
