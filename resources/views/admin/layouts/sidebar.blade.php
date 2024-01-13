  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
        <img src="{{ asset('assets/logo/logo.jpg') }}" width="150px" height="30px" alt="">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item ">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>User Management</p>
            </a>
          </li>
          
          @can('role-create')
            <li class="nav-item ">
              <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.*')?'active':'' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Role Mangement</p>
              </a>
            </li>
          @endcan  
            
          <li class="nav-item ">
            <a href="{{ route('information.index') }}" class="nav-link {{ request()->routeIs('information.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Information</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('slider.index') }}" class="nav-link {{ request()->routeIs('slider.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Slider</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('gallery.index') }}" class="nav-link {{ request()->routeIs('gallery.*')?'active':'' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Gallery</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('event.index') }}" class="nav-link {{ request()->routeIs('event.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Event</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('goal.index') }}" class="nav-link {{ request()->routeIs('goal.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Goal</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('donation.index') }}" class="nav-link {{ request()->routeIs('donation.*')?'active':'' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Donation</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('member.index') }}" class="nav-link {{ request()->routeIs('member.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Member</p>
            </a>
          </li>
            
          <li class="nav-item ">
            <a href="{{ route('message.index') }}" class="nav-link {{ request()->routeIs('message.*')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Message Box</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('updatePasswordForm') }}" class="nav-link {{ request()->routeIs('updatePasswordForm')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>User Password Change</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>