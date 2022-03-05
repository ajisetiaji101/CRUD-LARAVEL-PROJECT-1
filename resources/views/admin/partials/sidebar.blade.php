<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('admin/images/logo.svg') }}" alt="" class="logo logo-lg">
                <img src="{{ asset('admin/images/logo-sm.svg') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            @if (auth()->user()->level == 'admin')
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>DATA</label>
                </li>
                <li class="pc-item">
                    <a href="/data" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Karyawan</span></a>
                </li>
            </ul>
            @endif
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>SETTING</label>
                </li>
                <li class="pc-item">
                    <a href="/info" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">account_circle</i></span><span class="pc-mtext">Akun</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>