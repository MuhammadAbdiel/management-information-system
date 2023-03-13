@include('layouts.header')

@include('layouts.navbar')
@include('layouts.sidebar')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

  @yield('content')

  <!-- ============================================================== -->
  <!-- footer -->
  <!-- ============================================================== -->
  <footer class="footer text-center">
    All Rights Reserved by UMKM Pakan Burung.
  </footer>
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
</div>

@include('layouts.footer')