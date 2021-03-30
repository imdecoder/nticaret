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
                    <i class="fas fa-users"></i>
                    <span>Grup Yönetimi</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url(route_to('admin_group_list', null))?>" class="nav-link">
                            Grup Listesi
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url(route_to('admin_group_add'))?>" class="nav-link">
                            Yeni Grup Ekle
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
