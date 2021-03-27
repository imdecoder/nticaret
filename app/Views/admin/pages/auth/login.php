<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="<?=base_url('public/admin/img/nticaret.png')?>" alt="logo" width="130" class="mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">
                        <?=lang('Login.text.welcome')?>
                        <!--<span class="font-weight-bold">Stisla</span>-->
                    </h4>
                    <p class="text-muted">
                        <?=lang('Login.text.description')?>
                    </p>
                    <form action="<?=base_url(route_to('admin_login'))?>" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="email">
                                <?=lang('Input.text.email')?>
                            </label>
                            <input type="email" name="email" class="form-control" id="email" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                <?=lang('Validation.text.email_required')?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">
                                    <?=lang('Input.text.password')?>
                                </label>
                            </div>
                            <input type="password" name="password" class="form-control" id="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                <?=lang('Validation.text.password_required')?>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me" tabindex="3">
                                <label class="custom-control-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>-->
                        <div class="form-group text-right">
                            <a href="<?=base_url(route_to('admin_forgot_password'))?>" class="float-left mt-3">
                                <?=lang('Login.text.forgot_password')?>
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                <?=lang('Login.text.login_button')?>
                            </button>
                        </div>
                        <div class="mt-5 text-center">
                            <?=lang('Login.text.dont_account')?>
                            <a href="<?=base_url(route_to('admin_register'))?>">
                                <?=lang('Login.text.create_account')?>
                            </a>
                        </div>
                    </form>
                    <div class="text-center mt-5 text-small">
                        Copyright &copy; nTicaret
                        <div class="mt-2">
                            <a href="#">
                                <?=lang('Login.text.privacy_policy')?>
                            </a>
                            <div class="bullet"></div>
                            <a href="#">
                                <?=lang('Login.text.terms_of_service')?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?=base_url('public/admin/img/unsplash/login-bg.jpg')?>">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">
                                Günaydın
                            </h1>
                            <h5 class="font-weight-normal text-muted-transparent">
                                Bali, Endonezya
                            </h5>
                        </div>
                        <!--Photo by
                        <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">
                            Justin Kauffman
                        </a>
                        on
                        <a class="text-light bb" target="_blank" href="https://unsplash.com">
                            Unsplash
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->endSection(); ?>
