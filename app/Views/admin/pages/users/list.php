<?php $this->extend('admin/layout/main'); ?>

<?php

    $segment = service('request')->uri->getSegment(5);

?>

<?php $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content">
    	<section class="section">
    		<div class="section-header">
    			<h1>
                    Kullanıcılar
                </h1>
    			<div class="section-header-breadcrumb">
                    <div class="section-header-button">
        				<a href="<?=base_url(route_to('admin_user_add'))?>" class="btn btn-primary">
                            Yeni Kullanıcı Ekle
                        </a>
        			</div>
    			</div>
    		</div>
    		<div class="section-body">
    			<div class="row">
    				<div class="col-12">
    					<div class="card mb-0">
    						<div class="card-body">
    							<ul class="nav nav-pills">
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', null))?>" class="nav-link <?=empty($segment) ? 'active' : null?>">
                                            Tümü <span class="badge badge-<?=empty($segment) ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/active'))?>" class="nav-link <?=$segment == 'active' ? 'active' : null?>">
                                            Aktif <span class="badge badge-<?=$segment == 'active' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/pending'))?>" class="nav-link <?=$segment == 'pending' ? 'active' : null?>">
                                            Beklemede <span class="badge badge-<?=$segment == 'pending' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/passive'))?>" class="nav-link <?=$segment == 'passive' ? 'active' : null?>">
                                            Pasif <span class="badge badge-<?=$segment == 'passive' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
                                    <li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/trash'))?>" class="nav-link <?=$segment == 'trash' ? 'active' : null?>">
                                            Çöp Kutusu <span class="badge badge-<?=$segment == 'trash' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    							</ul>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="row mt-4">
    				<div class="col-12">
    					<div class="card">
    						<div class="card-body">
                                <form action="<?=current_url()?>" method="get">
        							<div class="float-left">
                                        <div class="row">
                                            <div class="dropdown d-inline mr-3">
                                                <button type="button" class="btn btn-lg btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?=lang('General.text.action')?>
                                                </button>
                                                <div class="dropdown-menu">

                                                    <?php if ($segment != 'trash') : ?>

                                                        <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="<?=base_url(route_to('admin_user_delete'))?>">
                                                            Sil
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-active" data-url="">
                                                            Aktif Yap
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-passive" data-url="">
                                                            Pasif Yap
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-pending" data-url="">
                                                            Beklemede Yap
                                                        </a>

                                                    <?php else: ?>

                                                        <a href="javascript:void(0)" class="dropdown-item all-restore" data-url="<?=base_url(route_to('admin_user_restore'))?>">
                                                            Geri Al
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-hard-delete" data-url="<?=base_url(route_to('admin_user_hard_delete'))?>">
                                                            Kalıcı Olarak Sil
                                                        </a>

                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="per_page" class="form-control">
                                                    <option value="">
                                                        Veri sayısı
                                                    </option>
                                                    <option value="10">
                                                        10
                                                    </option>
                                                    <option value="20">
                                                        20
                                                    </option>
                                                    <option value="50">
                                                        50
                                                    </option>
                                                    <option value="100">
                                                        100
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
        							</div>
        							<div class="float-right">
    									<div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="date_filter" value="<?=$date_filter?>" placeholder="Tarihe göre filtrele" class="form-control daterange-cus">
                                                    <div class="input-group-append">
            											<button type="button" class="btn btn-danger">
                                                            <i class="fas fa-times clear_date_filter"></i>
                                                        </button>
            										</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <input type="text" name="search" value="<?=$search?>" placeholder="<?=lang('General.text.search')?>" class="form-control">
            										<div class="input-group-append">
            											<button type="submit" class="btn btn-primary">
                                                            <i class="fas fa-search"></i>
                                                        </button>
            										</div>
                                                </div>
        									</div>
                                        </div>
        							</div>
                                </form>
    							<div class="clearfix mb-3"></div>
    							<div class="table-responsive">
    								<table class="table table-striped custom-table">
    									<tr>
    										<th class="pt-2">
    											<div class="custom-checkbox custom-checkbox-table custom-control">
    												<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
    												<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
    											</div>
    										</th>
    										<th>
                                                Ad Soyad
                                            </th>
    										<th>
                                                E-posta
                                            </th>
                                            <th>
                                                Grup
                                            </th>
    										<th>
                                                Eklenme Tarihi
                                            </th>
    										<th>
                                                Durum
                                            </th>
    									</tr>

                                        <?php foreach ($users as $key => $user) : ?>

                                            <tr data-id="<?=$user->id?>">
        										<td>
        											<div class="custom-checkbox custom-control">
        												<input type="checkbox" class="custom-control-input" id="checkbox-<?=$user->id?>" data-id="<?=$user->id?>" data-checkboxes="mygroup">
        												<label for="checkbox-<?=$user->id?>" class="custom-control-label">&nbsp;</label>
        											</div>
        										</td>
        										<td>
        											<?=$user->getFullName()?>

                                                    <?php if ($segment == 'trash') : ?>

                                                        <div class="table-links">
                                                            <a href="javascript:void(0)" class="text-success restore" data-url="<?=base_url(route_to('admin_user_restore'))?>">
                                                                Geri Al
                                                            </a>
            												<div class="bullet"></div>
            												<a href="javascript:void(0)" class="text-danger hard-delete" data-url="<?=base_url(route_to('admin_user_hard_delete'))?>">
                                                                Kalıcı Olarak Sil
                                                            </a>
            											</div>

                                                    <?php else: ?>

                                                        <div class="table-links">
            												<a href="#">
                                                                Düzenle
                                                            </a>
            												<div class="bullet"></div>
                                                            <a href="javascript:void(0)" class="change-status">
                                                                D. Değiştir
                                                            </a>
            												<div class="bullet"></div>
            												<a href="javascript:void(0)" class="text-danger delete" data-url="<?=base_url(route_to('admin_user_delete'))?>">
                                                                Sil
                                                            </a>
            											</div>

                                                    <?php endif; ?>

        										</td>
        										<td>
        											<?=$user->getEmail()?>
        										</td>
                                                <td>
        											<?=nt_lang_data($user->title)?>
        										</td>
        										<td>
                                                    <?=$user->getCreatedAt()?>
                                                </td>
        										<td>

                                                    <?php if ($user->getStatus() == STATUS_ACTIVE) : ?>

                                                        <div class="badge badge-success">
                                                            Aktif
                                                        </div>

                                                    <?php elseif ($user->getStatus() == STATUS_PENDING) : ?>

                                                        <div class="badge badge-warning">
                                                            Beklemede
                                                        </div>

                                                    <?php else: ?>

                                                        <div class="badge badge-danger">
                                                            Pasif
                                                        </div>

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
    			</div>
    		</div>
    	</section>
    </div>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

    <script>
        $('input[name=date_filter]').val('<?=$date_filter?>');
        $('select[name=per_page]').val('<?=$per_page?>');
    </script>

<?php $this->endSection(); ?>
