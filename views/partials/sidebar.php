<div class="sidebar" style="min-height: 100vh;">
    <div class="sidebar-header">
        <div class="app-icon d-flex " style="justify-content: center;">
            <img src="../../assets/phnom-penh-cinema-low-resolution-logo-color-on-transparent-background.png" class="mt-1" width="37%" alt="">
        </div>
    </div>
    <?php $active = "active"; ?>
    <ul class="sidebar-list">
        <li class="sidebar-list-item <?= urlIs('/seller') ? 'active' : '' ?>">
            <a href="/seller">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
                <span class="fs-6">Movie list</span>
            </a>
        </li>
        <li class="sidebar-list-item <?= urlIs('/seller/setting') ? 'active' : '' ?>">
            <a href="/seller/setting">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <path d="M16 10a4 4 0 0 1-8 0" />
                </svg>
                <span class="fs-6">Movie sitting</span>
            </a>
        </li>
    </ul>
</div>