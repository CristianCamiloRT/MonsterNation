<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Routine $routine
 * @var \Cake\Collection\CollectionInterface|string[] $exercises
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Routines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routines form content">
            <?= $this->Form->create($routine) ?>
            <fieldset>
                <legend><?= __('Add Routine') ?></legend>
                <?php
                    echo $this->Form->control('routine');
                    echo $this->Form->control('description');
                    echo $this->Form->control('exercises._ids', ['options' => $exercises]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
