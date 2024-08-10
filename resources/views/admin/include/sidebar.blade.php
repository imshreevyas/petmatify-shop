<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{url("/dashboard")}}" class="app-brand-link">
            <img src="storage/app/{{ !empty(Auth::user()->logo) ? Auth::user()->logo : '' }}"
                style="height: 38px;width: 150px;">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{request()->segment(1)=='dashboard'?'active':'' }}">
            <a href="{{url('/admin/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{request()->segment(1)=='account'?'active':''}}">
            <a href="{{url('/admin/account')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Account</div>
            </a>
        </li>

        <li class="menu-item {{ $page_type == 'residentialAll' || $page_type == 'residentialAdd' || $page_type == 'residentialEdit' ?'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Layouts">Residential Properties</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item {{ $page_type == 'residentialAll' ? 'active':''}}">
                    <a href="{{url('/admin/residential/all')}}" class="menu-link">
                        <div data-i18n="Without menu">All Properties</div>
                    </a>
                </li>

                <li class="menu-item {{ $page_type == 'residentialAdd'?'active':''}}">
                    <a href="{{url('/admin/residential/add')}}" class="menu-link">
                        <div data-i18n="Without navbar">Add new Property</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ $page_type == 'commercialAll' || $page_type == 'commercialAdd' || $page_type == 'commercialEdit' ?'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Layouts">Commercial Properties</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item {{ $page_type == 'commercialAll' ? 'active':''}}">
                    <a href="{{url('/admin/commercial/all')}}" class="menu-link">
                        <div data-i18n="Without menu">All Properties</div>
                    </a>
                </li>

                <li class="menu-item {{ $page_type == 'commercialAdd' ? 'active':''}}">
                    <a href="{{url('/admin/commercial/add')}}" class="menu-link">
                        <div data-i18n="Without navbar">Add new Property</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ $page_type == 'allGeneralSettings' ?'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Layouts">General Settings</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item {{ $page_type == 'AllSettings' ? 'active':''}}">
                    <a href="{{url('/admin/settings/all')}}" class="menu-link">
                        <div data-i18n="Without menu">All General Settings</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="{{url('/admin/logout')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-exit"></i>
                <div data-i18n="Analytics">Logout</div>
            </a>
        </li>
    </ul>
</aside>