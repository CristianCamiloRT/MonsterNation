<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise $exercise
 * @var \Cake\Collection\CollectionInterface|string[] $routines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Exercises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exercises form content">
            <?= $this->Form->create($exercise) ?>
            <fieldset>
                <legend><?= __('Add Exercise') ?></legend>
                <?php
                    echo $this->Form->control('exercise');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image');
                    echo $this->Form->control('routines._ids', ['options' => $routines]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
