<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
                <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-2 font-weight-bold text-white">Ninoy Aquino Senior High School</span>
            </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Laravel examples</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'user-profile' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user-profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user-management') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Administrative Management</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'user-account' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user-account') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group</i>
                    </div>
                    <span class="nav-link-text ms-1">User Account</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'create-account' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('create-account') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group_add</i>
                    </div>
                    <span class="nav-link-text ms-1">Create Account</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Transaction Process</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'qrcode-scanner' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('qrcode-scanner') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">qr_code_scanner</i>
                    </div>
                    <span class="nav-link-text ms-1">QR Code Scanner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'qrcode-generator' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('qrcode-generator') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">qr_code</i>
                    </div>
                    <span class="nav-link-text ms-1">Student QR Code Generator</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'attendance-report' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('attendance-report') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">text_snippet

                        </i>
                    </div>
                    <span class="nav-link-text ms-1">Attendance Report</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Information Management</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'student-information' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('student-information') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">diversity_3</i>
                    </div>
                    <span class="nav-link-text ms-1">Student Information</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'school-personnel' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('school-personnel') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_box</i>
                    </div>
                    <span class="nav-link-text ms-1">School Personnel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'faculty-load' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('faculty-load') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">article</i>
                    </div>
                    <span class="nav-link-text ms-1">Faculty Load</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'tables' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('tables') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'virtual-reality' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('virtual-reality') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'rtl' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('rtl') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'notifications' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('notifications') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-in') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-up') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
