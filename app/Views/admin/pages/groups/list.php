<?php $this->extend('admin/layout/main'); ?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>
                    Grup Listesi
                </h1>
                <div class="section-header-breadcrumb">
                    <div class="section-header-button">
                        <a href="<?=base_url(route_to('admin_group_add'))?>" class="btn btn-primary mr-2">
                            Yeni Grup Ekle
                        </a>
                    </div>

                    <?php if (service('request')->uri->getSegment(5) != 'trash') : ?>

                        <a href="<?=base_url(route_to('admin_group_list', '/trash'))?>" class="btn btn-danger">
                            Çöp Kutusu
                        </a>

                    <?php else: ?>

                        <a href="<?=base_url(route_to('admin_group_list', null))?>" class="btn btn-success">
                            Aktif Gruplar
                        </a>

                    <?php endif; ?>

                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Gruplar
                        </h4>
                        <div class="card-header-form">
                            <form action="<?=current_url()?>" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Ara" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-all" data-checkboxes="mygroup" data-checkbox-role="dad">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Slug</th>
                                    <th>Grup Adı</th>
                                    <th>Tarihler</th>
                                    <th>İşlem</th>
                                </tr>

                                <?php foreach ($groups as $group) : ?>

                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-1" data-checkboxes="mygroup">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><?=$group->getSlug()?></td>
                                        <td><?=$group->getTitle()?></td>
                                        <td><?=$group->getCreatedAt()?></td>
                                        <td>

                                            <?php if ($group->getDeletedAt()) : ?>

                                                <a href="#" class="btn btn-icon btn-success">
                                                    <i class="fas fa-trash-restore"></i>
                                                </a>

                                            <?php else: ?>

                                                <a href="<?=base_url(route_to('admin_group_edit', $group->id))?>" class="btn btn-icon btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>

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
