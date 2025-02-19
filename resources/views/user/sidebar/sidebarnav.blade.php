
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

           <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'dashboard') collapse @else collapsed @endif" href="/">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a> 
            </li><!-- End Dashboard Nav -->
    
            <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'wallet') collapse @else collapsed @endif" href="/wallet">
                    <i class="bi bi-credit-card-fill"></i>
                    <span>Wallet Deposit</span>
                </a>
            </li><!-- End Contact Page Nav -->
    
            <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'transaction') collapse @else collapsed @endif" href="/transaction">
                    <i class="bi bi-send-fill"></i>
                    <span>Transfer fund</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'investment') collapse @else collapsed @endif" href="/investment">
                    <i class="bi bi-folder-fill"></i>
                    <span>My Investment</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'withdrawals') collapse @else collapsed @endif" href="/withdrawals">
                    <i class="bi bi-database-fill-down"></i>
                    <span>Withdrawals</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if($activeNavItem === 'contractsupport') collapse @else collapsed @endif" href="/contactsupport">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Contact Support</span>
                </a>
            </li><!-- End Contact Page Nav -->
            {{-- <li class="nav-heading">Example</li> --}}

        </ul>

    </aside>
