<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="<?=base_url('public/admin/img/nticaret.png')?>" alt="nTicaret" width="130">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>
                                <?=lang('Register.view.title')?>
                            </h4>
                        </div>
                        <div class="card-body">

                            <?=$this->include('admin/layout/partials/errors')?>

                            <form action="<?=base_url(route_to('admin_register'))?>" method="post">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="firstname">
                                            <?=lang('Register.view.firstname')?>
                                        </label>
                                        <input type="text" name="firstname" class="form-control" id="firstname" required autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="lastname">
                                            <?=lang('Register.view.lastname')?>
                                        </label>
                                        <input type="text" name="lastname" class="form-control" id="lastname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        <?=lang('Register.view.email')?>
                                    </label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">
                                            <?=lang('Register.view.password')?>
                                        </label>
                                        <input type="password" name="password" class="form-control pwstrength" id="password" data-indicator="pwindicator" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">
                                            <?=lang('Register.view.password_conf')?>
                                        </label>
                                        <input type="password" name="password2" class="form-control" id="password2" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="contract" class="custom-control-input" id="contract" required>
                                        <label for="contract" class="custom-control-label">
                                            <?=lang('Register.view.contract')?>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        <?=lang('Register.view.button')?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; nTicaret <?=date('Y')?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->endSection(); ?>
