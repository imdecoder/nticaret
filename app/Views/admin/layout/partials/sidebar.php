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
                    <i class="fas fa-columns"></i>
                    <span>Layout</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="layout-default.html" class="nav-link">
                            Default Layout
                        </a>
                    </li>
                    <li>
                        <a href="layout-transparent.html" class="nav-link">
                            Transparent Sidebar
                        </a>
                    </li>
                    <li>
                        <a href="layout-top-navigation.html" class="nav-link">
                            Top Navigation
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blank.html" class="nav-link">
                    <i class="far fa-square"></i>
                    <span>Blank Page</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-th"></i>
                    <span>Bootstrap</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="bootstrap-alert.html">
                            Alert
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="bootstrap-badge.html">
                            Badge
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-breadcrumb.html" class="nav-link">
                            Breadcrumb
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-buttons.html" class="nav-link">
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-card.html" class="nav-link">
                            Card
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-carousel.html" class="nav-link">
                            Carousel
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-collapse.html" class="nav-link">
                            Collapse
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-dropdown.html" class="nav-link">
                            Dropdown
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-form.html" class="nav-link">
                            Form
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-list-group.html" class="nav-link">
                            List Group
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-media-object.html" class="nav-link">
                            Media Object
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-modal.html" class="nav-link">
                            Modal
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-nav.html" class="nav-link">
                            Nav
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-navbar.html" class="nav-link">
                            Navbar
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-pagination.html" class="nav-link">
                            Pagination
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-popover.html" class="nav-link">
                            Popover
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-progress.html" class="nav-link">
                            Progress
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-table.html" class="nav-link">
                            Table
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-tooltip.html" class="nav-link">
                            Tooltip
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-typography.html" class="nav-link">
                            Typography
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">
                Stisla
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-th-large"></i>
                    <span>Components</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="components-article.html" class="nav-link">
                            Article
                        </a>
                    </li>
                    <li>
                        <a href="components-avatar.html" class="nav-link beep beep-sidebar">
                            Avatar
                        </a>
                    </li>
                    <li>
                        <a href="components-chat-box.html" class="nav-link">
                            Chat Box
                        </a>
                    </li>
                    <li>
                        <a href="components-empty-state.html" class="nav-link beep beep-sidebar">
                            Empty State
                        </a>
                    </li>
                    <li>
                        <a href="components-gallery.html" class="nav-link">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="components-hero.html" class="nav-link beep beep-sidebar">
                            Hero
                        </a>
                    </li>
                    <li>
                        <a href="components-multiple-upload.html" class="nav-link">
                            Multiple Upload
                        </a>
                    </li>
                    <li>
                        <a href="components-pricing.html" class="nav-link beep beep-sidebar">
                            Pricing
                        </a>
                    </li>
                    <li>
                        <a href="components-statistic.html" class="nav-link">
                            Statistic
                        </a>
                    </li>
                    <li>
                        <a href="components-tab.html" class="nav-link">
                            Tab
                        </a>
                    </li>
                    <li>
                        <a href="components-table.html" class="nav-link">
                            Table
                        </a>
                    </li>
                    <li>
                        <a href="components-user.html" class="nav-link">
                            User
                        </a>
                    </li>
                    <li>
                        <a href="components-wizard.html" class="nav-link beep beep-sidebar">
                            Wizard
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="far fa-file-alt"></i>
                    <span>Forms</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="forms-advanced-form.html" class="nav-link">
                            Advanced Form
                        </a>
                    </li>
                    <li>
                        <a href="forms-editor.html" class="nav-link">
                            Editor
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html" class="nav-link">
                            Validation
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Google Maps</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="gmaps-advanced-route.html">
                            Advanced Route
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-draggable-marker.html">
                            Draggable Marker
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-geocoding.html">
                            Geocoding
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-geolocation.html">
                            Geolocation
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-marker.html">
                            Marker
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-multiple-marker.html">
                            Multiple Marker
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-route.html">
                            Route
                        </a>
                    </li>
                    <li>
                        <a href="gmaps-simple.html">
                            Simple
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-plug"></i>
                    <span>Modules</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="modules-calendar.html" class="nav-link">
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="modules-chartjs.html" class="nav-link">
                            ChartJS
                        </a>
                    </li>
                    <li>
                        <a href="modules-datatables.html" class="nav-link">
                            DataTables
                        </a>
                    </li>
                    <li>
                        <a href="modules-flag.html" class="nav-link">
                            Flag
                        </a>
                    </li>
                    <li>
                        <a href="modules-font-awesome.html" class="nav-link">
                            Font Awesome
                        </a>
                    </li>
                    <li>
                        <a href="modules-ion-icons.html" class="nav-link">
                            Ion Icons
                        </a>
                    </li>
                    <li>
                        <a href="modules-owl-carousel.html" class="nav-link">
                            Owl Carousel
                        </a>
                    </li>
                    <li>
                        <a href="modules-sparkline.html" class="nav-link">
                            Sparkline
                        </a>
                    </li>
                    <li>
                        <a href="modules-sweet-alert.html" class="nav-link">
                            Sweet Alert
                        </a>
                    </li>
                    <li>
                        <a href="modules-toastr.html" class="nav-link">
                            Toastr
                        </a>
                    </li>
                    <li>
                        <a href="modules-vector-map.html" class="nav-link">
                            Vector Map
                        </a>
                    </li>
                    <li>
                        <a href="modules-weather-icon.html" class="nav-link">
                            Weather Icon
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">
                Pages
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="far fa-user"></i>
                    <span>Auth</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="auth-forgot-password.html">
                            Forgot Password
                        </a>
                    </li>
                    <li>
                        <a href="auth-login.html">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="auth-login-2.html" class="beep beep-sidebar">
                            Login 2
                        </a>
                    </li>
                    <li>
                        <a href="auth-register.html">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="auth-reset-password.html">
                            Reset Password
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-exclamation"></i>
                    <span>Errors</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="errors-503.html" class="nav-link">
                            503
                        </a>
                    </li>
                    <li>
                        <a href="errors-403.html" class="nav-link">
                            403
                        </a>
                    </li>
                    <li>
                        <a href="errors-404.html" class="nav-link">
                            404
                        </a>
                    </li>
                    <li>
                        <a href="errors-500.html" class="nav-link">
                            500
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-bicycle"></i>
                    <span>Features</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="features-activities.html" class="nav-link">
                            Activities
                        </a>
                    </li>
                    <li>
                        <a href="features-post-create.html" class="nav-link">
                            Post Create
                        </a>
                    </li>
                    <li>
                        <a href="features-posts.html" class="nav-link">
                            Posts
                        </a>
                    </li>
                    <li>
                        <a href="features-profile.html" class="nav-link">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="features-settings.html" class="nav-link">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="features-setting-detail.html" class="nav-link">
                            Setting Detail
                        </a>
                    </li>
                    <li>
                        <a href="features-tickets.html" class="nav-link">
                            Tickets
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="utilities-contact.html">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="utilities-invoice.html" class="nav-link">
                            Invoice
                        </a>
                    </li>
                    <li>
                        <a href="utilities-subscribe.html">
                            Subscribe
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="credits.html" class="nav-link">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>Credits</span>
                </a>
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
