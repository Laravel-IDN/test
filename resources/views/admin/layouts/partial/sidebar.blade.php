<nav id="sidebar" class="border">
    <div class="sidebar-header">
        <div class="sidebar-user text-center">
            <img src="{{ asset('images/icon_user.png') }}" class="rounded-circle mb-2" height="100" alt="Linda Miller">
            <div class="font-weight-bold">{{ Auth::user()->name }}</div>
            <small>{{ Auth::user()->email }}</small>
        </div>
    </div>

    <ul class="nav flex-column">
        <li class="sidebar-header">Menu</li>
        @role('superadmin')
        <li class="nav-item active border">
            <a href="#dashboardSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                {{ __('Dashboard') }}
            </a>

            <ul class="collapse list-unstyled {{ Str::contains(Route::currentRouteName(), 'dashboard.') ? 'show' : '' }}" id="dashboardSubmenu">
                <li class="nav-item">
                    <a href="/admin/dashboard/ringkasan" class="nav-link {{ Str::contains(Route::currentRouteName(), 'dashboard.') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Ringkasan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/dashboard/kritikdansaran"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'dashboard.') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Kritik Dan Saran
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#dashboardSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        {{ __('Analisa Masalah') }}
                    </a>
                    <ul class="collapse list-unstyled {{ Str::contains(Route::currentRouteName(), 'dashboard.') ? 'show' : '' }}" id="dashboardSubmenu2">
                        <li class="nav-item">
                            <a href="/admin/dashboard/kamarhunian" class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.general') ? 'active' : '' }} ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                Kamar Hunian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/dashboard/tamping"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'dashboard.') ? 'active' : '' }} ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                                Tamping
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        @endrole

        @role('pengunjung')
        <a href="#dashboardSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            {{ __('Kunjungan') }}
        </a>
        <ul class="collapse list-unstyled {{ Str::contains(Route::currentRouteName(), 'kunjungan.') ? 'show' : '' }}" id="dashboardSubmenu">
            <li class="nav-item">
                <a href="{{ route('kunjungan.create') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.general') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Daftar
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kunjungan.index') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.general') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Riwayat
                </a>
            </li>
        </ul>
        @endrole

        @ability('admin', 'list-antrian')
        <li class="nav-item border">
            <a href="{{ route('antrian.index') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'antrian') ? 'active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg> Daftar Antrian <span class="sr-only">(current)</span>
            </a>
        </li>
        @endability

        @role('admin')
        <li class="nav-item border">
            <a href="{{ route('kunjungan.admin') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'kunjungan') ? 'active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                Daftar Kunjungan <span class="sr-only">(current)</span>
            </a>
        </li>
        @endrole

        @role('admin')
        <li class="nav-item border">
            <a href="{{ route('kunjungan.admin.blok') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'kunjungan') ? 'active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg> Pemanggilan WBP <span class="sr-only">(current)</span>
            </a>
        </li>
        @endrole

        @role('superadmin')
        <li class="nav-item active border">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-settings">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
                {{ __('Master Data') }}
            </a>

            <ul class="collapse list-unstyled {{ Str::contains(Route::currentRouteName(), 'setting.') ? 'show' : '' }}" id="homeSubmenu">
                <li class="nav-item">
                    <a href="{{ route('wbp.index') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.general') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Entry WBP
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jadwal.index') }}"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.landing') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Entry Waktu Kunjungan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ruangan.index') }}"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.landing') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Entry Meja
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengunjung.index') }}"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.landing') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Entry Pengunjung
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengunjung.index') }}"  class="nav-link {{ Str::contains(Route::currentRouteName(), 'setting.landing') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        Entry Status WBP
                    </a>
                </li>
            </ul>
        </li>
        @endrole

        @role('superadmin')
        <li class="nav-item border">
            <a href="{{ route('dashboard.laporan') }}" class="nav-link {{ Str::contains(Route::currentRouteName(), 'kunjungan') ? 'active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                Laporan <span class="sr-only">(current)</span>
            </a>
        </li>
        @endrole
    </ul>
</nav>
