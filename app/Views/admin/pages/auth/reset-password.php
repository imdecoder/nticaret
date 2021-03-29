<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?=base_url('public/admin/img/nticaret.png')?>" alt="nTicaret" width="130">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>
                                <?=lang('ResetPassword.text.title')?>
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                                <?=lang('ResetPassword.text.content')?>
                                <br>
                                <?=lang('ResetPassword.text.content_2')?>
                            </p>

                            <?=$this->include('admin/layout/partials/errors')?>

                            <form action="<?=base_url(route_to('admin_reset_password'))?>" method="post">

                                <?=csrf_field()?>

                                <div class="form-group">
                                    <label for="password">
                                        <?=lang('Input.text.new_password')?>
                                    </label>
                                    <input type="password" name="password" class="form-control pwstrength" id="password" data-indicator="pwindicator" tabindex="2" required>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2">
                                        <?=lang('Input.text.password2')?>
                                    </label>
                                    <input type="password" name="password2" class="form-control" id="password2" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <?=lang('ResetPassword.text.button')?>
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
