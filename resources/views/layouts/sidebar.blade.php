<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        
        <style>
            .sidebar-menu {
              list-style: none;
              padding: 0;
            }
          
            .sidebar-menu li {
              display: flex;
              align-items: center;
              margin-bottom: 5px; /* Atur margin sesuai kebutuhan */
            }
          
            .sidebar-menu li a {
              text-decoration: none;
              color: #000; /* Ganti warna teks sesuai kebutuhan */
            }
          
            .nav-icon {
              margin-right: 10px; /* Atur margin sesuai kebutuhan */
            }
            
          </style>  
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa-solid fa-gauge-high nav-icon" style="color: #ffffff;"></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::is('user*') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="fa-solid fa-users nav-icon" style="color: #ffffff;"></i> <span>Users</span></a></li>
            <li class="{{ Request::is('categories*') ? 'active' : '' }}"><a href="{{ route('categories.index') }}"><i class="fa-solid fa-list-ul nav-icon" style="color: #ffffff;"></i> <span>Kategori</span></a></li>
            <li class="{{ Request::is('products*') ? 'active' : '' }}"><a href="{{ route('products.index') }}"><i class="fa-solid fa-cubes nav-icon" style="color: #ffffff;"></i><span>Products</span></a></li>
            <li class="{{ Request::is('accessories*') ? 'active' : '' }}"><a href="/accessories"><i class="fa-solid fa-cube nav-icon" style="color: #ffffff;"></i></i> <span>accessories</span></a></li>
            <li class="{{ Request::is('Material*') ? 'active' : '' }}"><a href="/Material"><i class="fa-solid fa-cubes-stacked nav-icon" style="color: #ffffff;"></i> <span>Material</span></a></li>
            <li class="{{ Request::is('FinishGood*') ? 'active' : '' }}"><a href="{{ route('finishgood.index') }}"><i class="fa-solid fa-fire-extinguisher nav-icon" style="color: #ffffff;"></i> <span>Finish Good</span></a></li>
            <li class="{{ Request::is('customers*') ? 'active' : '' }}"><a href="{{ route('customers.index') }}"><i class="fa-solid fa-street-view nav-icon" style="color: #ffffff;"></i> <span>Customer</span></a></li>
            <li class="{{ Request::is('suppliers*') ? 'active' : '' }}"><a href="{{ route('suppliers.index') }}"><i class="fa-solid fa-truck-arrow-right nav-icon" style="color: #ffffff;"></i><span>Supplier</span></a></li>
            <li class="{{ Request::is('productsOut*') ? 'active' : '' }}"><a href="{{ route('productsOut.index') }}"><i class="fa-solid fa-circle-minus nav-icon" style="color: #ffffff;"></i><span>Product Keluar</span></a></li>
            <li class="{{ Request::is('productsIn*') ? 'active' : '' }}"><a href="{{ route('productsIn.index') }}"><i class="fa-solid fa-circle-plus nav-icon" style="color: #ffffff;"></i><span>Product Masuk</span></a></li>
          </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
