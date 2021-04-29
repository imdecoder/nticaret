<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?=base_url(route_to('admin_dashboard'))?>">
                <img src="<?=base_url('public/admin/img/nticaret.png')?>" alt="nTicaret" width="130">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=base_url(route_to('admin_dashboard'))?>">
                <img src="<?=base_url('public/admin/img/nticaret-fold.png')?>" alt="nTicaret" width="60">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">
                <?=lang('Sidebar.text.main_menu')?>
            </li>
            <li class="active">
                <a href="<?=base_url(route_to('admin_dashboard'))?>" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span><?=lang('Sidebar.text.dashboard')?></span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-user"></i>
                    <span><?=lang('Sidebar.text.user_management')?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url(route_to('admin_user_list', null))?>" class="nav-link">
                            <?=lang('Sidebar.text.user_list')?>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url(route_to('admin_user_add'))?>" class="nav-link">
                            <?=lang('Sidebar.text.add_new_user')?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-users"></i>
                    <span><?=lang('Sidebar.text.group_management')?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url(route_to('admin_group_list', null))?>" class="nav-link">
                            <?=lang('Sidebar.text.group_list')?>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url(route_to('admin_group_add'))?>" class="nav-link">
                            <?=lang('Sidebar.text.add_new_group')?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-image"></i>
                    <span>Medya Yönetimi</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url(route_to('admin_image_list'))?>" class="nav-link">
                            Resimler
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            Videolar
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            Dosyalar
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-life-ring"></i>
                <?=lang('Sidebar.text.support')?>
            </a>
        </div>
    </aside>
</div>
