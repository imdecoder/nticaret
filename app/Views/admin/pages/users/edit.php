<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    "<?=$user->getFullName()?>" <?=lang('Users.text.edit_user')?>
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
                                    <?=lang('Input.text.firstname')?>
                                </label>
                                <input type="text" name="firstname" value="<?=$user->getFirstname()?>" class="form-control" id="firstname" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">
                                    <?=lang('Input.text.lastname')?>
                                </label>
                                <input type="text" name="lastname" value="<?=$user->getLastname()?>" class="form-control" id="lastname" required>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <?=lang('Input.text.email')?>
                                </label>
                                <input type="email" name="email" value="<?=$user->getEmail()?>" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    <?=lang('Input.text.password')?>
                                </label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="status">
                                    <?=lang('Input.text.status_select')?>
                                </label>
                                <select name="status" class="form-control select2" id="status" required>
                                    <option value="<?=STATUS_ACTIVE?>" <?=$user->getStatus() == STATUS_ACTIVE ? 'selected' : null?>>
                                        <?=lang('General.text.active')?>
                                    </option>
                                    <option value="<?=STATUS_PASSIVE?>" <?=$user->getStatus() == STATUS_PASSIVE ? 'selected' : null?>>
                                        <?=lang('General.text.passive')?>
                                    </option>
                                    <option value="<?=STATUS_PENDING?>" <?=$user->getStatus() == STATUS_PENDING ? 'selected' : null?>>
                                        <?=lang('General.text.pending')?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="group_id">
                                    <?=lang('Input.text.group_select')?>
                                </label>
                                <select name="group_id" class="form-control select2" id="group_id" required>

                                    <?php foreach ($groups as $group) : ?>

                                        <option value="<?=$group->id?>" <?=$user->getGroupID() == $group->id ? 'selected' : null?>>
                                            <?=$group->getTitle()?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bio">
                                    <?=lang('Input.text.bio')?>
                                </label>
                                <textarea name="bio" class="form-control" id="bio" style="min-height: 150px"><?=$user->getBio()?></textarea>
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
