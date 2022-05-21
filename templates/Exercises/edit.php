<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Editar Ejercicio') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info login_form">
                <?= $this->Form->create($exercise, ["enctype" => "multipart/form-data"]) ?>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="field">
                                <?=
                                    $this->Form->control('exercise', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Nombre del Ejercicio',
                                        'label' => ''
                                    ]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4 mb-4">
                            <div class="field">
                                <?=
                                    $this->Form->control('description', [
                                        'class' => 'float-ini w-100',
                                        'placeholder' => 'Descripción del Ejercicio',
                                        'label' => ''
                                    ]);
                                    ?>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="">
                                <?=
                                    $this->Form->control('image', [
                                        'class' => 'float-ini w-100',
                                        'type' => 'file',
                                        'placeholder' => 'Url Imagen',
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