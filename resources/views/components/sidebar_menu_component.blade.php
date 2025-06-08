<ul class="nav flex-column gap-2" style="font-size: 0.85rem;">
    <li class="nav-item">
        <a href="{{ Route::currentRouteName() == 'teacher_dashboard' ? '/teacher_dashboard' : '/student_dashboard' }}" class="nav-link text-white rounded-2 {{ Route::currentRouteName() == 'teacher_dashboard' || Route::currentRouteName() == 'student_dashboard' ? 'active bg-primary' : '' }}">
            <i class="bi bi-graph-up-arrow"></i>
            Dashboard
        </a>
    </li>
    @if (Route::currentRouteName() == 'teacher_dashboard')
        <li class="nav-item">
            <a href="/students" class="nav-link text-white rounded-2 {{ request()->is('profile') ? 'active bg-primary' : '' }}">
                <i class="bi bi-people"></i>
                Students
            </a>
        </li>
    @endif
    <li class="nav-item">
        <a type="button" class="nav-link text-white rounded-2" data-bs-toggle="modal" data-bs-target="#settingsModal">
            <i class="bi bi-gear"></i>
            Settings
        </a>
    </li>
    <li class="nav-item">
        <div class="btn btn-sm btn-outline-danger w-100 btn-logout fw-semibold" type="button">Logout</button>
    </li>
</ul>
