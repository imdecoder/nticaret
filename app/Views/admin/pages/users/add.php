<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    Yeni Kullanıcı Ekle
                </h1>
            </div>
            <div class="section-body">
                <div class="card">

                    <?=$this->include('admin/layout/partials/errors')?>

                    <form action="<?=current_url()?>" method="post">

                        <?=csrf_field()?>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstname">
                                    Ad
                                </label>
                                <input type="text" name="firstname" class="form-control" id="firstname" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">
                                    Soyad
                                </label>
                                <input type="text" name="lastname" class="form-control" id="lastname" required>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    E-posta Adresi
                                </label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Şifre
                                </label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="group_id">
                                    Grup Seçin
                                </label>
                                <select name="group_id" class="form-control select2" id="group_id" required>

                                    <?php foreach ($groups as $group) : ?>

                                        <option value="<?=$group->id?>">
                                            <?=$group->getTitle()?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bio">
                                    Biyografi
                                </label>
                                <textarea name="bio" class="form-control" id="bio" style="min-height: 150px"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-lg btn-block btn-success">
                                <?=lang('General.text.save')?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

<?php $this->endSection(); ?>
