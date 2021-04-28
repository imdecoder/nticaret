<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Genel Bakış</h1>
            </div>
            <div class="section-body">

                <?=nt_single_image_picker('blog-image', 'image', 'blog-image-id')?>

                <hr>

                <?=nt_multiple_image_picker('Resim Seç', 'images', 'images-list', 'btn-danger')?>

                <hr>

                <?=nt_multiple_image_area('images-list')?>

            </div>
        </section>
    </div>

<?php $this->endSection(); ?>
