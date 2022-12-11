<ul class="nk-menu">
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Overview</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.dashboard.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Dashboard</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Top Up Funds</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.deposit.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Funds</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Account</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.profile.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">My Profile</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('user.security.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Change Password</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Exit</h6>
    </li>
    <li class="nk-menu-item">
        <a href="javascript:void(0);" onclick="document.getElementById('logout').submit();" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Logout</span>
        </a>
    </li>
</ul>