<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Editar Usuario') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info login_form">
                <?= $this->Form->create($user) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('name', [
                                        'class' => 'float-ini',
                                        'placeholder' => 'Nombres',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('last_name', [
                                        'class' => 'float-ini',
                                        'placeholder' => 'Apellidos',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('identification', [
                                        'class' => 'float-ini',
                                        'placeholder' => 'Número de documento',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('email', [
                                        'class' => 'float-ini',
                                        'placeholder' => 'Correo',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('password', [
                                        'class' => 'float-ini',
                                        'placeholder' => 'Contraseña',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('role_id', [
                                        'options' => $roles,
                                        'class' => 'float-ini',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <?=
                                    $this->Form->control('active', [
                                        'class' => 'float-ini w-auto mr-3 mb-1',
                                        'label' => 'Usuario Activo'
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="">
                                <?=
                                    $this->Form->control('routines._ids', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Rutina',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <?= $this->Form->button(__('Crear'), ['class' => 'main_bt']) ?>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>