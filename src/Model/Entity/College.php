<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * College Entity
 *
 * @property string $College
 * @property string|null $CollegeName
 * @property string|null $ContactEmail
 * @property string|null $ContactName
 * @property string|null $ContactTel
 * @property string|null $Homepage
 * @property string|null $Stylesheet
 * @property string|null $Report
 * @property int|null $FYStart
 */
class College extends Entity
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
        'CollegeName' => true,
        'ContactEmail' => true,
        'ContactName' => true,
        'ContactTel' => true,
        'Homepage' => true,
        'Stylesheet' => true,
        'Report' => true,
        'FYStart' => true,
    ];
}
