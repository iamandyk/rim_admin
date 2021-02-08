<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->FacID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->FacID], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->FacID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faculty'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faculty'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faculty view content">
            <h3><?= h($faculty->FacID) ?></h3>
            <table>
                <tr>
                    <th><?= __('FacID') ?></th>
                    <td><?= h($faculty->FacID) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastName') ?></th>
                    <td><?= h($faculty->LastName) ?></td>
                </tr>
                <tr>
                    <th><?= __('FirstName') ?></th>
                    <td><?= h($faculty->FirstName) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitAdmin') ?></th>
                    <td><?= h($faculty->UnitAdmin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pwd') ?></th>
                    <td><?= h($faculty->Pwd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($faculty->Username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($faculty->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('CollegeAdmin') ?></th>
                    <td><?= h($faculty->CollegeAdmin) ?></td>
                </tr>
                <tr>
                    <th><?= __('AdminUnit') ?></th>
                    <td><?= h($faculty->AdminUnit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($faculty->Telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($faculty->Address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($faculty->Website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maineedu Email') ?></th>
                    <td><?= h($faculty->maineedu_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('PctFullTime') ?></th>
                    <td><?= $this->Number->format($faculty->PctFullTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $faculty->Admin ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ignore') ?></th>
                    <td><?= $faculty->Ignore ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Inactive') ?></th>
                    <td><?= $faculty->Inactive ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('TenureTrack') ?></th>
                    <td><?= $faculty->TenureTrack ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('GrantsOnly') ?></th>
                    <td><?= $faculty->GrantsOnly ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('NC') ?></th>
                    <td><?= $faculty->NC ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
