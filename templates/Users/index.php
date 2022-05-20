<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Usuarios Creados') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row justify-content-end">
<?= $this->Html->link(__('Crear Usuario'), 
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
                                <th><?= $this->Paginator->sort('identification', 'Documento') ?></th>
                                <th><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                                <th><?= $this->Paginator->sort('last_name', 'Apellido') ?></th>
                                <th><?= $this->Paginator->sort('email', 'Correo') ?></th>
                                <th><?= $this->Paginator->sort('active', 'Activo') ?></th>
                                <th><?= $this->Paginator->sort('role_id', 'Rol') ?></th>
                                <th class="actions"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= $this->Number->format($user->identification) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->last_name) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->active) ? 'Si' : 'No' ?></td>
                                    <td><?= h($user->role->role) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-success m-b-10 m-l-5 fa fa-eye"></button>'),
                                            [
                                                'action' => 'view', $user->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Html->link(__('<button type="button" class="btn btn-info m-b-10 m-l-5 fa fa-edit"></button>'),
                                            [
                                                'action' => 'edit', $user->id
                                            ],
                                            [
                                                'escape' => false
                                            ])
                                        ?>
                                        <?= $this->Form->postLink(__('<button type="button" class="btn btn-danger m-b-10 m-l-5 fa fa-trash-o""></button>'), 
                                            [
                                                'action' => 'delete', $user->id
                                            ], 
                                            [
                                                'escape' => false,
                                                'confirm' => __('Esta seguro de eliminar al usuario # {0}?', $user->id)
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