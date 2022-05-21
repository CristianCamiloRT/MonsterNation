<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Ejercicios Creados') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row justify-content-end">
<?= $this->Html->link(__('Crear Ejercicio'), 
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
                                <th><?= $this->Paginator->sort('id', 'Id') ?></th>
                                <th><?= $this->Paginator->sort('exercise', 'Nombre Ejercicio') ?></th>
                                <th class="actions text-right"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exercises as $exercise): ?>
                                <tr>
                                    <td><?= $this->Number->format($exercise->id) ?></td>
                                    <td><?= h($exercise->exercise) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-success m-b-10 m-l-5 fa fa-eye"></button>'),
                                            [
                                                'action' => 'view', $exercise->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-info m-b-10 m-l-5 fa fa-edit"></button>'),
                                            [
                                                'action' => 'edit', $exercise->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Form->postLink(__('<button type="button" class="btn btn-danger m-b-10 m-l-5 fa fa-trash-o""></button>'), 
                                            [
                                                'action' => 'delete', $exercise->id
                                            ], 
                                            [
                                                'escape' => false,
                                                'confirm' => __('Esta seguro de eliminar el ejercicio # {0}?', $exercise->id)
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