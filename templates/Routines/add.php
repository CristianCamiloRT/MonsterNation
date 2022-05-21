<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Crear Rutina') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info login_form">
                <?= $this->Form->create($routine) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="field">
                                <?=
                                    $this->Form->control('routine', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Nombre de la Rutina',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="field">
                                <?=
                                    $this->Form->control('description', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Descripción de la rutina',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="">
                                <?=
                                    $this->Form->control('exercises._ids', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Ejercicios',
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
