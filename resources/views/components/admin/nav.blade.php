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
        <h6 class="overline-title text-primary-alt">Finance</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.finance.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Add Balance</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.withdraw.index') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Withdraw Request</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">Transaction ID</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.tids.approved') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Approved TID</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.tids.pending') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Pending TID</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">All Betting</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.bet.active') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Active Bet</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.bet.close') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Closed Bet</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">All Profit Transactions</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.transaction.all') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Transactions</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.transaction.deposit') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Deposits</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.transaction.withdraw') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">All Withdraw</span>
        </a>
    </li>
    <li class="nk-menu-heading">
        <h6 class="overline-title text-primary-alt">All Commissions</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.commission.first') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">First Level</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.commission.second') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Second Level</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('admin.commission.third') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
            <span class="nk-menu-text">Third Level</span>
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