<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2><?= __('Ver Usuario') ?></h2>
        </div>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info login_form">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= h($user->name) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= h($user->last_name) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= $this->Number->format($user->identification) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= h($user->email) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= h($user->role->role) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= $user->active ? __('Activo') : __('Inactivo'); ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= 'Creado el ' . h($user->created) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field">
                                <input value="<?= 'Modificado el ' . h($user->modified) ?>" class="float-ini" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>