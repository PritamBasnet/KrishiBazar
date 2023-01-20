 <!-- Menu -->

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <img style="padding: 20px 12px;" src="{{ asset('frontend/image/logo.png') }}" alt="">
        </li>
        <!-- Dashboard -->
        <li class="menu-item {{ (request()->segment(2) == 'dashboard' && request()->segment(3) == "") ? "active" : "" }}">
            <a href="index.html" class="menu-link"> 
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Feature</span></li>
        <li class="menu-item {{ (request()->segment(3) == 'category') ? "active" : "" }}">
            <a href="{{ route('category.table') }}" class="menu-link">
                <i class="menu-icon tf-icons bi bi-card-checklist"></i>
                <div data-i18n="Basic">Category</div>
            </a>
        </li>
        {{-- <li class="menu-item">
            <a href="{{ route('location.table') }}" class="menu-link">
                <i class="menu-icon tf-icons bi bi-card-checklist"></i>
                <div data-i18n="Basic">Location</div>
            </a>
        </li> --}}
        <li class="menu-item {{ (request()->segment(3) == 'agricultureunit') ? "active" : "" }}">
            <a href="{{ route('agricultureunit.table') }}" class="menu-link">
                <i class="menu-icon tf-icons bi bi-card-checklist"></i>
                <div data-i18n="Basic">Agriculture Unit</div>
            </a>
        </li>
        <!-- User interface -->
        <li class="menu-item {{ (request()->segment(3) == 'product') ? "active" : "" }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bi bi-bucket"></i>
                <div data-i18n="User interface">Product</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('product.add') }}" class="menu-link">
                        <div data-i18n="Accordion">Add Product</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('product.table') }}" class="menu-link">
                        <div data-i18n="Alerts">Product Table</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ (request()->segment(3) == 'service') ? "active" : "" }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bi bi-bucket"></i>
                <div data-i18n="User interface">Service</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('service.add') }}" class="menu-link">
                        <div data-i18n="Accordion">Add Service</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('service.table') }}" class="menu-link">
                        <div data-i18n="Alerts">Service Table</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ (request()->segment(3) == 'blog') ? "active" : "" }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bi bi-bucket"></i>
                <div data-i18n="User interface">Blog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('blog.add') }}" class="menu-link">
                        <div data-i18n="Accordion">Add Blog</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('blog.table') }}" class="menu-link">
                        <div data-i18n="Alerts">Blog Table</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ (request()->segment(3) == 'order') ? "active" : "" }}">
            <a href="{{ route('order.table') }}" class="menu-link">
                <i class="menu-icon tf-icons bi bi-card-checklist"></i>
                <div data-i18n="Basic">Order</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
