	
	<div class="sticky-footer sticky-content fix-bottom">
        <a href="{{ route('index') }}" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="{{ route('products') }}" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="tel:{{ $business->phone }}" class="sticky-link">
            <div class="bottom_navigation_custom">
                <i class="w-icon-call"></i>
                <p class="mt-1">Call Now</p>
            </div>
        </a>
        @if(Auth::check())
        <a href="{{ route('customer.account') }}" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        @else
        <a href="{{ route('login') }}" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        @endif
        
        {{--
        <div class="cart-dropdown dir-up">
            <a href="{{ route('carts') }}" class="sticky-link">
                <i class="w-icon-cart"><span class="cart-count" id="mobile_total_count">{{ Cart::count() }}</span></i>
                <p>Cart</p>
            </a>
        </div>
        --}}

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="{{ route('search.result') }}" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>