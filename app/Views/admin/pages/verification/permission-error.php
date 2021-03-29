<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    <?=lang('Permissions.text.error_title')?>
                </h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <div class="empty-state">
                            <div class="empty-state-icon bg-danger">
                                <i class="fas fa-times"></i>
                            </div>
                            <h2>
                                <?=lang('Permissions.text.error_title')?>
                            </h2>
                            <p class="lead">
                                <?=lang('Permissions.text.error_content')?>
                                <br>
                                <?=lang('Permissions.text.error_content_2')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->endSection(); ?>
