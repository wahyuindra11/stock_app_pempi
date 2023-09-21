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

        <!-- search form (Optional) -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form> --}}
        <!-- /.search form -->
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
            <li><a href="{{ url('/home') }}"><i class="fa-solid fa-gauge-high nav-icon" style="color: #ffffff;"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('user.index') }}"><i class="fa-solid fa-users nav-icon" style="color: #ffffff;"></i> <span>Users</span></a></li>
            <li><a href="{{ route('categories.index') }}"><i class="fa-solid fa-list-ul nav-icon" style="color: #ffffff;"></i> <span>Kategori</span></a></li>
            <li><a href="/accessories"><i class="fa-solid fa-cube nav-icon" style="color: #ffffff;"></i></i> <span>accessories</span></a></li>
            <li><a href="/Material"><i class="fa-solid fa-cubes-stacked nav-icon" style="color: #ffffff;"></i> <span>Material</span></a></li>
            <li><a href="/FinishGood"><i class="fa-solid fa-fire-extinguisher nav-icon" style="color: #ffffff;"></i> <span>Finish Good</span></a></li>
            <li><a href="{{ route('products.index') }}"><i class="fa-solid fa-cubes nav-icon" style="color: #ffffff;"></i><span>Product</span></a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa-solid fa-street-view nav-icon" style="color: #ffffff;"></i> <span>Customer</span></a></li>
            <!-- <li><a href="{{ route('sales.index') }}"><i class="fa fa-cart-plus nav-icon"></i> <span>Penjualan</span></a></li> -->
            <li><a href="{{ route('suppliers.index') }}"><i class="fa-solid fa-truck-arrow-right nav-icon" style="color: #ffffff;"></i><span>Supplier</span></a></li>
            <li><a href="{{ route('productsOut.index') }}"><i class="fa-solid fa-circle-minus nav-icon" style="color: #ffffff;"></i><span>Product Keluar</span></a></li>
            <li><a href="{{ route('productsIn.index') }}"><i class="fa-solid fa-circle-plus nav-icon" style="color: #ffffff;"></i><span>Product Masuk</span></a></li>
          </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
