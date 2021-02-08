<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faculty Entity
 *
 * @property string $FacID
 * @property string|null $LastName
 * @property string|null $FirstName
 * @property bool $Admin
 * @property string|null $UnitAdmin
 * @property string|null $Pwd
 * @property string|null $Username
 * @property string|null $Email
 * @property string|null $CollegeAdmin
 * @property bool $Ignore
 * @property string|null $AdminUnit
 * @property bool $Inactive
 * @property bool $TenureTrack
 * @property string|null $Telephone
 * @property string|null $Address
 * @property string|null $Website
 * @property int|null $PctFullTime
 * @property bool $GrantsOnly
 * @property bool $NC
 * @property string|null $maineedu_email
 */
class Faculty extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'LastName' => true,
        'FirstName' => true,
        'Admin' => true,
        'UnitAdmin' => true,
        'Pwd' => true,
        'Username' => true,
        'Email' => true,
        'CollegeAdmin' => true,
        'Ignore' => true,
        'AdminUnit' => true,
        'Inactive' => true,
        'TenureTrack' => true,
        'Telephone' => true,
        'Address' => true,
        'Website' => true,
        'PctFullTime' => true,
        'GrantsOnly' => true,
        'NC' => true,
        'maineedu_email' => true,
    ];
}
