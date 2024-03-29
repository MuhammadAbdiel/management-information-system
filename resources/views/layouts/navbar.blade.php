<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
          class="ti-menu ti-close"></i></a>
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="/">
        <!-- Logo icon -->
        <b class="logo-icon p-l-10">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="/assets/images/logo-icon.png" alt="homepage" class="light-logo" />

        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          <!-- dark Logo text -->
          {{-- <img src="/assets/images/logo-text.png" alt="homepage" class="light-logo" /> --}}

        </span>
        <!-- Logo icon -->
        <!-- <b class="logo-icon"> -->
        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
        <!-- Dark Logo icon -->
        <!-- <img src="/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

        <!-- </b> -->
        <!--End Logo icon -->
      </a>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Toggle which is visible on mobile only -->
      <!-- ============================================================== -->
      <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
        data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav float-left mr-auto">
        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
            href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
        {{-- <li class="nav-item dropdown">
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
      </ul>
      <!-- ============================================================== -->
      <!-- Right side toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav float-right">
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/1.jpg" alt="user"
              class="rounded-circle" width="31"></a>
          <div class="dropdown-menu dropdown-menu-right user-dd animated p-0">
            {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
              My Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account
              Setting</a>
            <div class="dropdown-divider"></div> --}}
            {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i>
              Logout</a> --}}
            <a href="javascript:void(0)" class="dropdown-item btn-logout"><i class="fa fa-power-off m-r-5 m-l-5"></i>
              Logout</a>
          </div>
        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
      </ul>
    </div>
  </nav>
</header>

<form action="/logout" id="logout-form" method="POST">
  @csrf
</form>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->