<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="empty-state">
                                <div class="empty-state-icon bg-danger">
                                    <i class="fas fa-times"></i>
                                </div>
                                <h2>
                                    <?=lang('ResetPasswordVerification.text.error_title')?>
                                </h2>
                                <p class="lead">
                                    <?=lang('ResetPasswordVerification.text.error_content')?>
                                    <br>
                                    <?=lang('ResetPasswordVerification.text.error_content_2')?>
                                </p>
                                <b><?=lang('ResetPasswordVerification.text.why_title')?></b>
                                <ol style="text-align: left">
                                    <li>
                                        <?=lang('ResetPasswordVerification.text.why_1')?>
                                    </li>
                                    <li>
                                        <?=lang('ResetPasswordVerification.text.why_2')?>
                                    </li>
                                </ol>
                                <a href="<?=base_url(route_to('admin_forgot_password'))?>" class="btn btn-primary mt-4">
                                    <?=lang('ResetPasswordVerification.text.error_button')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->endSection(); ?>
