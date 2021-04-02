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
                    <?=lang('Users.text.title')?>
                </h1>
    			<div class="section-header-breadcrumb">
                    <div class="section-header-button">
        				<a href="<?=base_url(route_to('admin_user_add'))?>" class="btn btn-primary">
                            <?=lang('Users.text.add_new_user')?>
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
                                            <?=lang('General.text.all')?>
                                            <span class="badge badge-<?=empty($segment) ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/active'))?>" class="nav-link <?=$segment == 'active' ? 'active' : null?>">
                                            <?=lang('General.text.active')?>
                                            <span class="badge badge-<?=$segment == 'active' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/pending'))?>" class="nav-link <?=$segment == 'pending' ? 'active' : null?>">
                                            <?=lang('General.text.pending')?>
                                            <span class="badge badge-<?=$segment == 'pending' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
    								<li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/passive'))?>" class="nav-link <?=$segment == 'passive' ? 'active' : null?>">
                                            <?=lang('General.text.passive')?>
                                            <span class="badge badge-<?=$segment == 'passive' ? 'white' : 'primary'?>">0</span>
                                        </a>
    								</li>
                                    <li class="nav-item">
    									<a href="<?=base_url(route_to('admin_user_list', '/trash'))?>" class="nav-link <?=$segment == 'trash' ? 'active' : null?>">
                                            <?=lang('General.text.trash')?>
                                            <span class="badge badge-<?=$segment == 'trash' ? 'white' : 'primary'?>">0</span>
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
                                                            <?=lang('General.text.delete')?>
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-status-change" data-status="<?=STATUS_ACTIVE?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                            <?=lang('General.text.make_active')?>
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-status-change" data-status="<?=STATUS_PASSIVE?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                            <?=lang('General.text.make_passive')?>
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-status-change" data-status="<?=STATUS_PENDING?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                            <?=lang('General.text.make_pending')?>
                                                        </a>

                                                    <?php else: ?>

                                                        <a href="javascript:void(0)" class="dropdown-item all-restore" data-url="<?=base_url(route_to('admin_user_restore'))?>">
                                                            <?=lang('General.text.restore')?>
                                                        </a>
                                                        <a href="javascript:void(0)" class="dropdown-item all-hard-delete" data-url="<?=base_url(route_to('admin_user_hard_delete'))?>">
                                                            <?=lang('General.text.delete_permanently')?>
                                                        </a>

                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                            <div class="form-group mr-3">
                                                <select name="per_page" class="form-control">
                                                    <option value="">
                                                        <?=lang('General.text.item_count')?>
                                                    </option>

                                                    <?php foreach (config('settings')->perPageList as $count) : ?>

                                                        <option value="<?=$count?>">
                                                            <?=$count?>
                                                        </option>

                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="group" class="form-control">
                                                    <option value="">
                                                        <?=lang('Input.text.group_select')?>
                                                    </option>

                                                    <?php foreach ($groups as $group) : ?>

                                                        <option value="<?=$group->id?>">
                                                            <?=$group->getTitle()?>
                                                        </option>

                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                        </div>
        							</div>
        							<div class="float-right">
    									<div class="row">
                                            <div class="form-group mr-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="date_filter" value="<?=$date_filter?>" placeholder="<?=lang('General.text.filter_by_date')?>" class="form-control daterange-cus">
                                                    <div class="input-group-append">
            											<button type="button" class="btn btn-danger">
                                                            <i class="fas fa-times clear_date_filter"></i>
                                                        </button>
            										</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
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
                                                <?=lang('Input.text.full_name')?>
                                            </th>
    										<th>
                                                <?=lang('Input.text.email')?>
                                            </th>
                                            <th>
                                                <?=lang('Input.text.group')?>
                                            </th>
    										<th>
                                                <?=lang('General.text.created_at')?>
                                            </th>
    										<th>
                                                <?=lang('Input.text.status')?>
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
                                                                <?=lang('General.text.restore')?>
                                                            </a>
            												<div class="bullet"></div>
            												<a href="javascript:void(0)" class="text-danger hard-delete" data-url="<?=base_url(route_to('admin_user_hard_delete'))?>">
                                                                <?=lang('General.text.delete_permanently')?>
                                                            </a>
            											</div>

                                                    <?php else: ?>

                                                        <div class="table-links">
            												<a href="<?=base_url(route_to('admin_user_edit', $user->id))?>">
                                                                <?=lang('General.text.edit')?>
                                                            </a>
            												<div class="bullet"></div>
                                                            <div class="dropdown d-inline">
                                                                <a href="#" class="dropdown-toggle status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <?=lang('General.text.status_change')?>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a href="javascript:void(0)" class="dropdown-item status-change" data-status="<?=STATUS_ACTIVE?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                                        <?=lang('General.text.make_active')?>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="dropdown-item status-change" data-status="<?=STATUS_PENDING?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                                        <?=lang('General.text.make_pending')?>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="dropdown-item status-change" data-status="<?=STATUS_PASSIVE?>" data-url="<?=base_url(route_to('admin_user_status'))?>">
                                                                        <?=lang('General.text.make_passive')?>
                                                                    </a>
                                                                </div>
                                                            </div>
            												<div class="bullet"></div>
            												<a href="javascript:void(0)" class="text-danger delete" data-url="<?=base_url(route_to('admin_user_delete'))?>">
                                                                <?=lang('General.text.delete')?>
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
                                                    <div class="badge badge-success badge-status badge-status-active" style="<?=$user->getStatus() != STATUS_ACTIVE ? 'display: none' : null?>">
                                                        <?=lang('General.text.active')?>
                                                    </div>
                                                    <div class="badge badge-warning badge-status badge-status-pending" style="<?=$user->getStatus() != STATUS_PENDING ? 'display: none' : null?>">
                                                        <?=lang('General.text.pending')?>
                                                    </div>
                                                    <div class="badge badge-danger badge-status badge-status-passive" style="<?=$user->getStatus() != STATUS_PASSIVE ? 'display: none' : null?>">
                                                        <?=lang('General.text.passive')?>
                                                    </div>
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
