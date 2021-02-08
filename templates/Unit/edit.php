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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unit->Unit],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unit->Unit), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Unit'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unit form content">
            <?= $this->Form->create($unit) ?>
            <fieldset>
                <legend><?= __('Edit Unit') ?></legend>
                <?php
                    echo $this->Form->control('UnitName');
                    echo $this->Form->control('College');
                    echo $this->Form->control('Inactive');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
