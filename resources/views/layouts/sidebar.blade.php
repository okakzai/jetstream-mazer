<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <a href="{{ route('dashboard') }}">Mazer Admin</a>
        </div>
        <ul class="menu">
            <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</div>
