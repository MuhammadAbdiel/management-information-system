<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        <li class="sidebar-item {{ Request::is('/') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/') ? 'active' : '' }}" href="/"
            aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li class="sidebar-item {{ Request::is('/items*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/items*') ? 'active' : '' }}"
            href="/items" aria-expanded="false"><i class="mdi mdi-cube"></i><span class="hide-menu">Items</span></a>
        </li>
        <li class="sidebar-item {{ Request::is('/item-types*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/item-types*') ? 'active' : '' }}"
            href="/item-types" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span
              class="hide-menu">Item
              Types</span></a></li>
        <li class="sidebar-item {{ Request::is('/item-units*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/item-units*') ? 'active' : '' }}"
            href="/item-units" aria-expanded="false"><i class="mdi mdi-cube-outline"></i><span class="hide-menu">Item
              Units</span></a></li>
        <li class="sidebar-item {{ Request::is('/funds*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/funds*') ? 'active' : '' }}"
            href="/funds" aria-expanded="false"><i class="mdi mdi-currency-usd"></i><span
              class="hide-menu">Funds</span></a>
        </li>
        <li class="sidebar-item {{ Request::is('/transactions*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/transactions*') ? 'active' : '' }}"
            href="/transactions" aria-expanded="false"><i class="mdi mdi-thumb-up"></i><span
              class="hide-menu">Transactions</span></a>
        </li>
        <li class="sidebar-item {{ Request::is('/suppliers*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/suppliers*') ? 'active' : '' }}"
            href="/suppliers" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span
              class="hide-menu">Suppliers</span></a>
        </li>
        <li class="sidebar-item {{ Request::is('/customers*') ? 'selected' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/customers*') ? 'active' : '' }}"
            href="/customers" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
              class="hide-menu">Customers</span></a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->