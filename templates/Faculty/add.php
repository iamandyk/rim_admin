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
            <?= $this->Html->link(__('List Faculty'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faculty form content">
            <?= $this->Form->create($faculty) ?>
            <fieldset>
                <legend><?= __('Add Faculty') ?></legend>
                <?php
                    echo $this->Form->control('LastName');
                    echo $this->Form->control('FirstName');
                    echo $this->Form->control('Admin');
                    echo $this->Form->control('UnitAdmin');
                    echo $this->Form->control('Pwd');
                    echo $this->Form->control('Username');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('CollegeAdmin');
                    echo $this->Form->control('Ignore');
                    echo $this->Form->control('AdminUnit');
                    echo $this->Form->control('Inactive');
                    echo $this->Form->control('TenureTrack');
                    echo $this->Form->control('Telephone');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('Website');
                    echo $this->Form->control('PctFullTime');
                    echo $this->Form->control('GrantsOnly');
                    echo $this->Form->control('NC');
                    echo $this->Form->control('maineedu_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
