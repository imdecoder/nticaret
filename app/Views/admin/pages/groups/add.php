<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    <?=lang('Groups.text.add_new_group')?>
                </h1>
            </div>
            <div class="section-body">
                <div class="card">

                    <?=$this->include('admin/layout/partials/errors')?>

                    <form action="<?=current_url()?>" method="post">

                        <?=csrf_field()?>

                        <div class="card-header">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <?php foreach (nt_language() as $key => $lang) : ?>

                                    <li class="nav-item">
                                        <a class="nav-link <?=$key == 0 ? 'active' : null?>"
                                            id="<?=$lang->getCode()?>-tab"
                                            data-toggle="tab"
                                            href="#<?=$lang->getCode()?>"
                                            role="tab"
                                            aria-controls="<?=$lang->getCode()?>"
                                            aria-selected="<?=$key == 0 ? 'true' : 'false' ?>">
                                            <img src="<?=$lang->getFlag()?>" alt="<?=$lang->getTitle()?>" width="20">
                                            <?=$lang->getTitle()?>
                                        </a>
                                    </li>

                                <?php endforeach; ?>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">

                                <?php foreach (nt_language() as $key => $lang) : ?>

                                    <div class="tab-pane fade <?=$key == 0 ? 'show active' : null?>"
                                        id="<?=$lang->getCode()?>"
                                        role="tabpanel"
                                        aria-labelledby="<?=$lang->getCode()?>-tab">
                                        <div class="form-group">
                                            <label for="title">
                                                <?=$lang->getTitle()?> <?=lang('Groups.text.group_name')?>
                                            </label>
                                            <input type="text" name="title[<?=$lang->getCode()?>]" class="form-control" id="title" required>
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                                <div class="section-title mt-0">
                                    <?=lang('Groups.text.group_permissions')?>
                                </div>
                                <ul class="list-group">

                                    <?php foreach (config('settings')->permissions as $key => $permission) : ?>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <?=lang($permission)?>
                                            <span class="badge badge-pill">
                                                <label class="custom-switch mt-2">
                                                    <input type="checkbox" name="permissions[<?=$key?>]" class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </span>
                                        </li>

                                    <?php endforeach; ?>

                                </ul>
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
