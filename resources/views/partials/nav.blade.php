<nav class="main-nav">
    <ul class="menu active-underline">
        <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
            <a href="{{ route('index') }}">Home</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
        	<a href="{{ route('products') }}">Shop</a>
        </li>
        {{--
        <li class="{{ Route::currentRouteName() == 'offer.products' ? 'active' : '' }}">
        	<a href="{{ route('offer.products') }}">Offer Products</a>
        </li>
        
        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
        	<a href="{{ route('about') }}">About Us</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
        	<a href="{{ route('contact') }}">Contact Us</a>
        </li>
        --}}
        
        <li class="has-submenu">
            <a href="javascript:void(0)">Categories</a>
            <ul class="submenu">
                @foreach($nav_categories as $category)
                @if(count($category->child) > 0)
               
                @else
                    <li><i class="fa fa-angle-right"></i> <a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">{{ $category->title }}</a></li>
                @endif
            @endforeach
            </ul>
        </li>
        
        @foreach($nav_categories as $category)
            @if(count($category->child) > 0)
            <li>
                <a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">
                    {{ $category->title }}
                </a>
                <ul class="submenu">
                    @foreach($category->child as $sub_category)
                    <li><a href="{{ route('category.products', [$sub_category->id, Str::slug($sub_category->title)]) }}"><i class="fa fa-angle-right"></i> {{ $sub_category->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endif
        @endforeach
        
        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
        	<a href="{{ route('about') }}">About Us</a>
        </li>
        
        <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
        	<a href="{{ route('contact') }}">Contact Us</a>
        </li>
        
        <li class="{{ Route::currentRouteName() == 'user.blog' ? 'active' : '' }}">
        	<a href="{{ route('user.blog') }}">Blog</a>
        </li>
        
        
    </ul>
</nav>