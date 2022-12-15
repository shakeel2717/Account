<ul class="nk-menu">
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Overview</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.dashboard.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Dashboard</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Transactions</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.transaction.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Transactions</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.transaction.create') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Transactions</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Customer</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.customer.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Customer</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.customer.create') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Customer</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Vendors</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.vendor.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Vendors</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.vendor.create') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Vendor</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Salary</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.salary.create') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Salary</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.salary.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Salary Paid</span>
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