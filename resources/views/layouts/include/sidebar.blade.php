<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{url('AdminLTE-3.1.0/dist/img/logo10.png')}}" alt="" class="w-50">
      <span class="brand-text font-weight-light">Konter Pulsa</span>
    </a>

    <!-- Sidebar -->
    
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.1.0/dist/img/orang.png" class="img-circle elevation-2" alt="User Image')}}">
        </div>
        <div class="info">
          <a href="" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/dashboard')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a> 
          </li>
         
          <li class="nav-item">
            <a href="{{url('/kasir')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Kasir
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('/pelanggan')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Pelanggan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/pulsa')}}" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Data Pulsa
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{url('/pembayaran')}}" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Log Out
              </p>
            </a>
          </li>
           
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>