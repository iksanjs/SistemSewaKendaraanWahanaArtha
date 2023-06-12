<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-car"></i>
      </div>
      <div class="sidebar-brand-text mx-3">ArthaRide</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
      Kelola Kendaraan
    </div>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKendaraan" aria-expanded="true" aria-controls="collapseKendaraan">
        <i class="fas fa-sw fa-taxi"></i>
        <span>Kendaraan</span>
      </a>
      <div id="collapseKendaraan" class="collapse" aria-labelledby="headingKendaraan" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Kendaraan</h6>
          <a class="collapse-item" href="{{ url('/kendaraan') }}">Data Kendaraan</a>
          <a class="collapse-item" href="{{ route('kendaraan.create') }}">Tambah Kendaraan</a>
          <a class="collapse-item" href="#">Jual Kendaraan</a>
        </div>
      </div>
    </li>
    
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSurat" aria-expanded="true" aria-controls="collapseSurat">
        <i class="fas fa-fw fa-id-card"></i>
        <span>Surat Kendaraan</span>
      </a>
      <div id="collapseSurat" class="collapse" aria-labelledby="headingSurat" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Surat Kendaraan</h6>
          <a class="collapse-item" href="bpkb">Kelola Data BPKB</a>
          <a class="collapse-item" href="stnk">Kelola Data STNK</a>
          <a class="collapse-item" href="kir">Kelola Data KIR</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAsuransi" aria-expanded="true" aria-controls="collapseAsuransi">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Asuransi</span>
      </a>
      <div id="collapseAsuransi" class="collapse" aria-labelledby="headingAsuransi" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Asuransi</h6>
          <a class="collapse-item" href="#">Kelola PT Asuransi</a>
          <a class="collapse-item" href="#">Kelola Asuransi</a>
        </div>
      </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
      Sewa Kendaraan
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSewa" aria-expanded="true" aria-controls="collapseSewa">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Sewa</span>
      </a>
      <div id="collapseSewa" class="collapse" aria-labelledby="headingSewa" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Transaksi Sewa</h6>
          <a class="collapse-item" href="#">Data Transaksi</a>
          <a class="collapse-item" href="#">Tambah Sewa</a>
          <a class="collapse-item" href="#">Pengembalian</a>
          <a class="collapse-item" href="#">Pemberhentian</a>
          <a class="collapse-item" href="#">Penggantian Permanen</a>
          <a class="collapse-item" href="#">Penggantian Sementara</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
      Service Kendaraan
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true" aria-controls="collapseService">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Service</span>
      </a>
      <div id="collapseService" class="collapse" aria-labelledby="headingService" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Pendataan Service</h6>
          <a class="collapse-item" href="{{ url('/service/create') }}">Tambah Data Service</a>
          <a class="collapse-item" href="{{ url('/kendaraan') }}">Sejarah Service</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBengkel" aria-expanded="true" aria-controls="collapseBengkel">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Bengkel</span>
      </a>
      <div id="collapseBengkel" class="collapse" aria-labelledby="headingBengkel" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kelola Pendataan Bengkel</h6>
          <a class="collapse-item" href="#">Tambah Data Bengkel</a>
          <a class="collapse-item" href="#">Data Bengkel</a>
        </div>
      </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
    <!-- End of Sidebar -->
    