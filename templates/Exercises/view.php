<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise $exercise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Exercise'), ['action' => 'edit', $exercise->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Exercise'), ['action' => 'delete', $exercise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Exercises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Exercise'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exercises view content">
            <h3><?= h($exercise->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Exercise') ?></th>
                    <td><?= h($exercise->exercise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($exercise->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($exercise->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($exercise->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exercise->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Image') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($exercise->image)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Routines') ?></h4>
                <?php if (!empty($exercise->routines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Routine') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($exercise->routines as $routines) : ?>
                        <tr>
                            <td><?= h($routines->id) ?></td>
                            <td><?= h($routines->routine) ?></td>
                            <td><?= h($routines->description) ?></td>
                            <td><?= h($routines->created) ?></td>
                            <td><?= h($routines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Routines', 'action' => 'view', $routines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Routines', 'action' => 'edit', $routines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Routines', 'action' => 'delete', $routines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $routines->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
