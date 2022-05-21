<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Rutinas Creadas') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row justify-content-end">
<?= $this->Html->link(__('Crear Rutina'), 
    [
        'action' => 'add'
    ], 
    [
        'class' => 'btn cur-p btn-success mb-4 mr-3 p-2'
    ]) 
?>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead class="thead-mn">
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('routine', 'Nombre de la Rutina') ?></th>
                                <th class="actions text-right"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($routines as $routine): ?>
                                <tr>
                                    <td><?= $this->Number->format($routine->id) ?></td>
                                    <td><?= h($routine->routine) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-success m-b-10 m-l-5 fa fa-eye"></button>'),
                                            [
                                                'action' => 'view', $routine->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-info m-b-10 m-l-5 fa fa-edit"></button>'),
                                            [
                                                'action' => 'edit', $routine->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Form->postLink(__('<button type="button" class="btn btn-danger m-b-10 m-l-5 fa fa-trash-o""></button>'), 
                                            [
                                                'action' => 'delete', $routine->id
                                            ], 
                                            [
                                                'escape' => false,
                                                'confirm' => __('Esta seguro de eliminar la rutina # {0}?', $routine->id)
                                            ]) 
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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