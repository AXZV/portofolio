<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="{{ url('dasboard_siswa') }}" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <span class="page-logo-text mr-1"><i class='fab fa-ravelry'></i> Kuanta Cendikia</span>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <ul id="js-nav-menu" class="nav-menu">

            <li>
                <a  href="{{ url('dasboard_siswa') }}" title="Dashboard" data-filter-tags="application intel">
                    <i class="fas fa-desktop"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                </a>
            </li>
            

        <!-- GROUP Data -->

            <li class="nav-title">Data</li>
            <li class="{{ $active == 'presensi' ? 'active' : '' }}">
                <a href="{{ url('siswa/presensi') }}" title="presensi" data-filter-tags="Presensi">
                    <i class="fas fa-user-check"></i>
                    <span class="nav-link-text" data-i18n="nav.presensi">Presensi</span>
                </a>
            </li>

            <li class="{{ $active == 'level_pengajaran' ? 'active' : '' }}">
                <a href="{{ url('siswa/level_pengajaran') }}" title="Level Pengajaran" data-filter-tags="level_pengajaran">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-link-text" data-i18n="nav.level_pengajaran">Level</span>
                </a>
            </li>

            <li class="{{ $active == 'level_pengajaran' ? 'active' : '' }}">
                <a href="{{ url('siswa/sesi') }}" title="Level Pengajaran" data-filter-tags="level_pengajaran">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="nav-link-text" data-i18n="nav.level_pengajaran">Sesi</span>
                </a>
            </li>

            <li class="{{ $active == 'pengaturan' ? 'active' : '' }}">
                <a href="{{ url('siswa/pengaturan') }}" title="pengaturan" data-filter-tags="Pengaturan">
                    <i class="fas fa-user-cog"></i>
                    <span class="nav-link-text" data-i18n="nav.pengaturan">Pengaturan</span>
                </a>
            </li>

        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
</aside>