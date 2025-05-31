<ul class="nav flex-column gap-2" style="font-size: 0.85rem;">
    <li class="nav-item">
        <a href="/dashboard" class="nav-link text-white rounded-2 {{ request()->is('dashboard') ? 'active bg-primary' : '' }}">
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a href="/profile" class="nav-link text-white rounded-2 {{ request()->is('profile') ? 'active bg-primary' : '' }}">
            Profile
        </a>
    </li>
    <li class="nav-item">
        <a href="/settings" class="nav-link text-white rounded-2 {{ request()->is('settings') ? 'active bg-primary' : '' }}">
            Settings
        </a>
    </li>
    <li class="nav-item w-100">
        <button class="nav-link text-white btn bg-danger w-100 btn-logout" type="button">Logout</button>
    </li>
</ul>
