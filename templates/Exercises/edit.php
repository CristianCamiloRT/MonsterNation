<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise $exercise
 * @var string[]|\Cake\Collection\CollectionInterface $routines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exercise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Exercises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exercises form content">
            <?= $this->Form->create($exercise) ?>
            <fieldset>
                <legend><?= __('Edit Exercise') ?></legend>
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
