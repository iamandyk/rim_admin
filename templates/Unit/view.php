<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unit $unit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->Unit], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->Unit], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->Unit), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Unit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Unit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unit view content">
            <h3><?= h($unit->Unit) ?></h3>
            <table>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($unit->Unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitName') ?></th>
                    <td><?= h($unit->UnitName) ?></td>
                </tr>
                <tr>
                    <th><?= __('College') ?></th>
                    <td><?= h($unit->College) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inactive') ?></th>
                    <td><?= $unit->Inactive ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
