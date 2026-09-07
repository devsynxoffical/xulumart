<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <!-- <a href="" class="brand-link" target="_blank" style="background-color: #fff">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light" style="color: #000;">{{ env('APP_NAME') }}</span>
  </a> -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('images/user-avatar-icon.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        @if(Auth::user()->type == 1)
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User Management
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Adminstrators</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('customer.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Users</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('contact.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Contact Us</p>
              </a>
            </li>
           
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Product
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('product.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Products List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('product.create') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Add Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('brand.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Brand</p>
              </a>
            </li>
            {{--
            <li class="nav-item">
              <a href="{{ route('variation.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Variation</p>
              </a>
            </li>
            --}}
          </ul>
        </li>

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-plus-square"></i>
            <p>
              Orders
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('order.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>All Orders</p>
              </a>
            </li>
            @foreach(App\Models\OrderStatus::all() as $status)
            <li class="nav-item">
              <a href="{{ route('order.status.filter', $status->id) }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>{{ $status->title }}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
        
        
        {{--
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-percent"></i>
            <p>
              Campaign
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{ route('coupon.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Coupone</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('registration.point.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Registration Point</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-certificate"></i>
            <p>
              Affiliate
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{ route('affiliate.request') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Seller Requests</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('affiliate.payment.request') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Payment Requests</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('affiliate.config') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Configuration</p>
              </a>
            </li>
            
          </ul>
        </li>
        --}}
        
        <li class="nav-item">
          <a href="{{ route('admin.subscribers') }}" class="nav-link">
            <i class="nav-icon fas fa-bell-slash"></i>
            <p>
              Subscribers
            </p>
          </a>
        </li>

        {{--
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-map-marker-alt"></i>
            <p>
              Location
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{ route('district.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>District List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('area.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Area List</p>
              </a>
            </li>
            
          </ul>
        </li>
        --}}

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{ route('setting.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Business Settings</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('setting.home.about') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Home About</p>
              </a>
            </li>
            {{--
            <li class="nav-item">
              <a href="{{ route('setting.reward.point') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Reward Point Settings</p>
              </a>
            </li>
            --}}
            <li class="nav-item">
              <a href="{{ route('slider.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Slider Option</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('page.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Pages</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('gallery.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Gallery</p>
              </a>
            </li> 

            <li class="nav-item">
              <a href="{{ route('gallery.deal.day') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Deal Of Day (set on Product Edit page)</p>
              </a>
            </li> 

            <li class="nav-item">
              <a href="{{ route('faq.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Faq</p>
              </a>
            </li> 

            <li class="nav-item">
              <a href="{{ route('store-menu.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Menu</p>
              </a>
            </li> 
            {{--
            <li class="nav-item">
              <a href="{{ route('referral.link.index') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Referral Link</p>
              </a>
            </li>
            --}}
            <!-- <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Sponsors</p>
              </a>
            </li> -->
            
          </ul>
        </li>
        
        {{--<li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tablets"></i>
            <p>
              Blog
              <i class="fas fa-angle-right right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{ route('blog.create') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Create Blog </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('blog.list') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>
                <p>Blog List</p>
              </a>
            </li>
            
          </ul>
        </li>--}}
        
        <li class="nav-item">
          <a href="{{ route('user.profile') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        @endif

        @if(Auth::user()->type == 2)
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-plus-square"></i>
            <p>
              My Orders
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-heart"></i>
            <p>
              My Wishlist
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('customer.dashboard.wallet') }}" class="nav-link">
            <i class="nav-icon fas fa-money-bill-alt"></i>
            <p>
              My Wallet
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.profile') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        @endif
        <div class="p-2"></div>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>