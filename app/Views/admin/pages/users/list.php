<?php $this->extend('admin/layout/main'); ?>

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
        				<a href="features-post-create.html" class="btn btn-primary">
                            Add New
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
    									<a href="#" class="nav-link active">
                                            Tümü <span class="badge badge-white">5</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="#" class="nav-link">
                                            Aktif <span class="badge badge-primary">1</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="#" class="nav-link">
                                            Beklemede <span class="badge badge-primary">1</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="#" class="nav-link">
                                            Pasif <span class="badge badge-primary">0</span>
                                        </a>
    								</li>
                                    <li class="nav-item">
    									<a href="#" class="nav-link">
                                            Çöp Kutusu <span class="badge badge-primary">0</span>
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
    							<div class="float-left">
                                    <div class="dropdown d-inline mr-2">
                                        <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?=lang('General.text.action')?>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="">
                                                Sil
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="">
                                                Aktif Yap
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="">
                                                Pasif Yap
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item all-delete" data-url="">
                                                Beklemede Yap
                                            </a>
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
    								<table class="table table-striped">
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
        											<div class="table-links">
                                                        <a href="#">
                                                            Profil
                                                        </a>
        												<div class="bullet"></div>
        												<a href="#">
                                                            Düzenle
                                                        </a>
        												<div class="bullet"></div>
                                                        <a href="javascript:void(0)" class="change-status">
                                                            D. Değiştir
                                                        </a>
        												<div class="bullet"></div>
        												<a href="javascript:void(0)" class="text-danger delete">
                                                            Sil
                                                        </a>
        											</div>
        										</td>
        										<td>
        											<?=$user->getEmail()?>
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
