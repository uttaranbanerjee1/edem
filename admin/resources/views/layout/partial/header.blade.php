<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>

        <a href="#" class="brand-logo">
            <img src="/assets/img/Kopie-von-logo-edm_4.-Logo-No-Sub.png" alt="" height="80" />
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <form class="menu-search" method="POST" name="header_search_form">
            <div class="menu-search-icon"><i class="fa fa-search"></i></div>
            <div class="menu-search-input">
                <input type="text" class="form-control" placeholder="Search menu..." />
            </div>
        </form>

        <div class="menu-item dropdown">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-img online">
                    <img src="/assets/img/user/user.jpg" alt="" class="mw-100 mh-100 rounded-circle" />
                </div>
                <div class="menu-text">seantheme@gmail.com</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3">
                <a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i
                        class="fa fa-user-circle fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <a class="dropdown-item d-flex align-items-center" href="#">Inbox <i
                        class="fa fa-envelope fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <a class="dropdown-item d-flex align-items-center" href="#">Calendar <i
                        class="fa fa-calendar-alt fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <a class="dropdown-item d-flex align-items-center" href="#">Setting <i
                        class="fa fa-wrench fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="#">Log Out <i
                        class="fa fa-toggle-off fa-fw ms-auto text-gray-400 fs-16px"></i></a>
            </div>
        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->