<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    <?=lang('Groups.text.title')?>
                </h1>
                <div class="section-header-breadcrumb">
                    <div class="section-header-button">
                        <a href="<?=base_url(route_to('admin_group_add'))?>" class="btn btn-primary mr-2">
                            <?=lang('Groups.text.add_new_group')?>
                        </a>

                        <?php if (service('request')->uri->getSegment(5) != 'trash') : ?>

                            <a href="<?=base_url(route_to('admin_group_list', '/trash'))?>" class="btn btn-danger">
                                <?=lang('General.text.trash')?>
                            </a>

                        <?php else: ?>

                            <a href="<?=base_url(route_to('admin_group_list', null))?>" class="btn btn-success">
                                <?=lang('Groups.text.active_groups')?>
                            </a>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="dropdown d-inline mr-2">
                                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?=lang('General.text.action')?>
                                </button>
                                <div class="dropdown-menu">

                                    <?php if (service('request')->uri->getSegment(5) != 'trash') : ?>

                                        <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="<?=base_url(route_to('admin_group_delete'))?>">
                                            <?=lang('General.text.delete')?>
                                        </a>

                                    <?php else: ?>

                                        <a href="javascript:void(0)" class="dropdown-item all-restore" data-url="<?=base_url(route_to('admin_group_restore'))?>">
                                            <?=lang('General.text.restore')?>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item all-hard-delete" data-url="<?=base_url(route_to('admin_group_hard_delete'))?>">
                                            <?=lang('General.text.delete_permanently')?>
                                        </a>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <form action="<?=current_url()?>" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="<?=lang('General.text.search')?>" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix mb-3"></div>
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <tr>
                                    <th class="text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-all" data-checkboxes="mygroup" data-checkbox-role="dad">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>
                                        <?=lang('General.text.slug')?>
                                    </th>
                                    <th>
                                        <?=lang('Groups.text.group_name')?>
                                    </th>

                                    <?php if (service('request')->uri->getSegment(5) != 'trash') : ?>

                                        <th>
                                            <?=lang('General.text.created_at')?>
                                        </th>

                                    <?php else: ?>

                                        <th>
                                            <?=lang('General.text.deleted_at')?>
                                        </th>

                                    <?php endif; ?>

                                    <th>
                                        <?=lang('General.text.action')?>
                                    </th>
                                </tr>

                                <?php foreach ($groups as $group) : ?>

                                    <tr data-id="<?=$group->id?>">
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-<?=$group->id?>" data-id="<?=$group->id?>" data-checkboxes="mygroup">
                                                <label for="checkbox-<?=$group->id?>" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <?=$group->getSlug()?>
                                        </td>
                                        <td>
                                            <?=$group->getTitle()?>
                                        </td>

                                        <?php if (service('request')->uri->getSegment(5) != 'trash') : ?>

                                            <td>
                                                <?=$group->getCreatedAt()?>
                                            </td>

                                        <?php else: ?>

                                            <td>
                                                <?=$group->getDeletedAt()?>
                                            </td>

                                        <?php endif; ?>

                                        <td>

                                            <?php if ($group->getDeletedAt()) : ?>

                                                <button class="btn btn-icon btn-success restore" data-url="<?=base_url(route_to('admin_group_restore'))?>">
                                                    <i class="fas fa-trash-restore"></i>
                                                </button>

                                            <?php else: ?>

                                                <a href="<?=base_url(route_to('admin_group_edit', $group->id))?>" class="btn btn-icon btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button class="btn btn-icon btn-danger delete" data-url="<?=base_url(route_to('admin_group_delete'))?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            <?php endif; ?>

                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">

                        <?=$pager->links('default', 'nt_pager')?>

                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->endSection(); ?>
