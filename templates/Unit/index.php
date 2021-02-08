<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unit[]|\Cake\Collection\CollectionInterface $unit
 */
?>
<div class="unit index content">
    <?= $this->Html->link(__('New Unit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Unit') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Unit') ?></th>
                    <th><?= $this->Paginator->sort('UnitName') ?></th>
                    <th><?= $this->Paginator->sort('College') ?></th>
                    <th><?= $this->Paginator->sort('Inactive') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($unit as $unit): ?>
                <tr>
                    <td><?= h($unit->Unit) ?></td>
                    <td><?= h($unit->UnitName) ?></td>
                    <td><?= h($unit->College) ?></td>
                    <td><?= h($unit->Inactive) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $unit->Unit]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unit->Unit]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unit->Unit], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->Unit)]) ?>
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
