<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty[]|\Cake\Collection\CollectionInterface $faculty
 */
?>
<div class="faculty index content">
    <?= $this->Html->link(__('New Faculty'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Faculty') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('FacID') ?></th>
                    <th><?= $this->Paginator->sort('LastName') ?></th>
                    <th><?= $this->Paginator->sort('FirstName') ?></th>
                    <th><?= $this->Paginator->sort('Admin') ?></th>
                    <th><?= $this->Paginator->sort('UnitAdmin') ?></th>
                    <th><?= $this->Paginator->sort('Pwd') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('CollegeAdmin') ?></th>
                    <th><?= $this->Paginator->sort('Ignore') ?></th>
                    <th><?= $this->Paginator->sort('AdminUnit') ?></th>
                    <th><?= $this->Paginator->sort('Inactive') ?></th>
                    <th><?= $this->Paginator->sort('TenureTrack') ?></th>
                    <th><?= $this->Paginator->sort('Telephone') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('Website') ?></th>
                    <th><?= $this->Paginator->sort('PctFullTime') ?></th>
                    <th><?= $this->Paginator->sort('GrantsOnly') ?></th>
                    <th><?= $this->Paginator->sort('NC') ?></th>
                    <th><?= $this->Paginator->sort('maineedu_email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faculty as $faculty): ?>
                <tr>
                    <td><?= h($faculty->FacID) ?></td>
                    <td><?= h($faculty->LastName) ?></td>
                    <td><?= h($faculty->FirstName) ?></td>
                    <td><?= h($faculty->Admin) ?></td>
                    <td><?= h($faculty->UnitAdmin) ?></td>
                    <td><?= h($faculty->Pwd) ?></td>
                    <td><?= h($faculty->Username) ?></td>
                    <td><?= h($faculty->Email) ?></td>
                    <td><?= h($faculty->CollegeAdmin) ?></td>
                    <td><?= h($faculty->Ignore) ?></td>
                    <td><?= h($faculty->AdminUnit) ?></td>
                    <td><?= h($faculty->Inactive) ?></td>
                    <td><?= h($faculty->TenureTrack) ?></td>
                    <td><?= h($faculty->Telephone) ?></td>
                    <td><?= h($faculty->Address) ?></td>
                    <td><?= h($faculty->Website) ?></td>
                    <td><?= $this->Number->format($faculty->PctFullTime) ?></td>
                    <td><?= h($faculty->GrantsOnly) ?></td>
                    <td><?= h($faculty->NC) ?></td>
                    <td><?= h($faculty->maineedu_email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $faculty->FacID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faculty->FacID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faculty->FacID], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->FacID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
