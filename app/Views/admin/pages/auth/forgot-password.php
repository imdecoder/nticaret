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
                                <?=lang('ForgotPassword.text.title')?>
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                                <?=lang('ForgotPassword.text.content')?>
                            </p>
                            <form action="<?=base_url(route_to('admin_forgot_password'))?>" method="post">

                                <?=csrf_field()?>

                                <div class="form-group">
                                    <label for="email">
                                        <?=lang('Input.text.email')?>
                                    </label>
                                    <input type="email" name="email" class="form-control" id="email" tabindex="1" required autofocus>
                                </div>

                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfpwpMaAAAAAKf6VXxI611IQ8tsKysky7msee15"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <?=lang('ForgotPassword.text.button')?>
                                    </button>
                                </div>
                            </form>

                            <?=$this->include('admin/layout/partials/errors')?>

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
