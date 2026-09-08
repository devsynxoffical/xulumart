<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/invoice', function () {
//     return view('admin.invoice.generate');
// });

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');


Route::get('/products', [App\Http\Controllers\PageController::class, 'products'])->name('products');
Route::get('/offer-products', [App\Http\Controllers\PageController::class, 'offer_products'])->name('offer.products');
Route::get('/product/{id}/{slug}', [App\Http\Controllers\PageController::class, 'single_product'])->name('single.product');

Route::get('/flash-sale', [App\Http\Controllers\PageController::class, 'flashSale'])->name('flashSale');

Route::get('/categories', [App\Http\Controllers\PageController::class, 'categories'])->name('categories');
Route::get('/category/{id}/{slug}', [App\Http\Controllers\PageController::class, 'category_products'])->name('category.products');

Route::get('/brand/{id}/{slug}', [App\Http\Controllers\PageController::class, 'brand_products'])->name('brand.products');

Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/all-categories', function () {
    $menus = \App\Models\StoreMenu::where('parent_id', 0)->where('is_active', 1)->orderBy('position')->get();
    return view('pages.all-categories', compact('menus'));
})->name('all.categories');
Route::post('/contact-us-message-send', [App\Http\Controllers\PageController::class, 'send_message'])->name('message.send');

Route::post('/contact-us-query-send', [App\Http\Controllers\PageController::class, 'send_query'])->name('message.query');

Route::get('/search', [App\Http\Controllers\PageController::class, 'search'])->name('search');
Route::get('/search-result', [App\Http\Controllers\PageController::class, 'search_result'])->name('search.result');
Route::post('/subsribe', [App\Http\Controllers\PageController::class, 'subscribe'])->name('subscribe');
Route::post('/popup-subscribe', [App\Http\Controllers\PageController::class, 'popupSubscribe'])->name('popup.subscribe');

Route::get('/privacy-policy', [App\Http\Controllers\PageController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [App\Http\Controllers\PageController::class, 'term_condition'])->name('term.condition');
Route::get('/faqs', [App\Http\Controllers\PageController::class, 'faqs_page'])->name('faqs.page');
Route::get('/shipping-policy', [App\Http\Controllers\PageController::class, 'shipping_policy'])->name('shipping.policy');
Route::get('/returns-and-refunds', [App\Http\Controllers\PageController::class, 'returns_refunds'])->name('returns.refunds');

// Cart Route
Route::get('/shopping-carts', [App\Http\Controllers\CartController::class, 'index'])->name('carts');
Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'add_cart'])->name('cart.add');
Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'update_cart'])->name('cart.update');
Route::post('/remove-from-cart', [App\Http\Controllers\CartController::class, 'remove_cart'])->name('cart.remove');
Route::post('/buy-now', [App\Http\Controllers\CartController::class, 'buy_now'])->name('buy.now');
Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');

// Wishlist Route
Route::post('/add-to-wishlist', [App\Http\Controllers\WishlistController::class, 'add_wishlist'])->name('wishlist.add');
Route::post('/remove-from-wishlist/{id}', [App\Http\Controllers\WishlistController::class, 'remove_wishlist'])->name('wishlist.remove');

Route::get('/add-to-wishlist/{id}', [App\Http\Controllers\WishlistController::class, 'add_wishlist_lara'])->name('wishlist.add.lara');
Route::get('/add-to-wishlist-count', [App\Http\Controllers\WishlistController::class, 'add_wishlist_lara_count'])->name('wishlist.add.count');
Route::get('/remove-to-wishlist/{id}', [App\Http\Controllers\WishlistController::class, 'remove_wishlist_lara'])->name('wishlist.remove.lara');

// Coupon Routes
Route::post('/apply-coupon', [App\Http\Controllers\CartController::class, 'apply_coupon'])->name('coupon.apply');
Route::get('/remove-coupon', [App\Http\Controllers\CartController::class, 'remove_coupon'])->name('coupon.remove');

// Order routes 

Route::post('/order-create', [App\Http\Controllers\PageController::class, 'order_create'])->name('order.create');
Route::get('/order-complete/{id}', [App\Http\Controllers\PageController::class, 'order_complete'])->name('order.complete');
Route::get('/track-order', [App\Http\Controllers\PageController::class, 'order_track'])->name('order.track');
Route::get('/track-order-status', [App\Http\Controllers\PageController::class, 'order_track_result'])->name('order.track.result');

// Customer Profile 
Route::get('/my-orders', [App\Http\Controllers\PageController::class, 'my_orders'])->name('customer.orders');
Route::get('/my-wishlist', [App\Http\Controllers\PageController::class, 'my_wishlist'])->name('customer.wishlist');
Route::get('/my-account', [App\Http\Controllers\PageController::class, 'my_account'])->name('customer.account');
Route::post('/customer-account-update/{id}', [App\Http\Controllers\PageController::class, 'customer_account_update'])->name('customer.account.update');
Route::post('/customer-password-change', [App\Http\Controllers\PageController::class, 'change_password'])->name('customer.password.change');
Route::get('/my-wallet', [App\Http\Controllers\PageController::class, 'my_wallet'])->name('customer.wallet');
Route::post('/my-wallet/point-convert', [App\Http\Controllers\PageController::class, 'my_wallet_point_convert'])->name('customer.point.convert');


// Affiliate Route
Route::post('/submit-affiliate-request', [App\Http\Controllers\PageController::class, 'affiliate_apply'])->name('affiliate.apply');

Route::get('/affiliate-dashboard', [App\Http\Controllers\PageController::class, 'affiliate_dashboard'])->name('customer.affiliate.dashboard');

Route::post('/payment-request', [App\Http\Controllers\PageController::class, 'payment_request'])->name('customer.payment.request');

// Affiliate Coupon Route
Route::post('/affiliate-coupon-store', [App\Http\Controllers\PageController::class, 'coupone_store'])->name('customer.coupon.store');
Route::post('/affiliate-coupon-update/{id}', [App\Http\Controllers\PageController::class, 'coupone_update'])->name('customer.coupon.update');
Route::post('/affiliate-coupon-delete/{id}', [App\Http\Controllers\PageController::class, 'coupone_delete'])->name('customer.coupon.destroy');


Route::get('/latest-news', [App\Http\Controllers\PageController::class, 'user_blog'])->name('user.blog');
Route::get('/nes-info/{s}/{slug}', [App\Http\Controllers\PageController::class, 'post_details'])->name('post.details');

// invoice 
Route::get('/generate-invoice/{id}', [App\Http\Controllers\OrderController::class, 'generate_invoice'])->name('invoice.generate');

// Route::get('/test', function () {
// 	$json = '[{"variation_id":"1","values":["s","m"]},{"variation_id":"2","values":["Red","Green"]}]';
// 	return json_decode($json, true);
// });

Auth::routes();

// API Routes
Route::get('get-sub-category/{id}', function ($id){
    return json_encode(App\Models\Category::where('parent_id',$id)->where('is_active', 1)->get());
});
Route::post('/product-filter', [App\Http\Controllers\PageController::class, 'product_filter'])->name('product.filter');

Route::get('get-area/{id}', function ($id){
    return json_encode(App\Models\Area::where('district_id',$id)->get());
});

// API Routes End

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::group(['prefix' => '/home', 'middleware' => ['auth', 'verified']], function(){
    
    // Admin Routes
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
	    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
		Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');
	});

	// Admin Routes
	Route::group(['prefix' => 'customer', 'as' => 'customer.'], function(){
	    Route::get('/', [App\Http\Controllers\AdminController::class, 'customer_index'])->name('index');
		Route::post('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'customer_destroy'])->name('destroy');
	});

	Route::group(['prefix' => 'contact', 'as' => 'contact.'], function(){
	    Route::get('/', [App\Http\Controllers\AdminController::class, 'contact_index'])->name('index');
		Route::post('/destroy/{id}', [App\Http\Controllers\AdminController::class, 'contact_destroy'])->name('destroy');
	});

    // Category Routes
	Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
	    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\CategoryController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');
	});

	// Brand Routes
	Route::group(['prefix' => 'brand', 'as' => 'brand.'], function(){
	    Route::get('/', [App\Http\Controllers\BrandController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\BrandController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\BrandController::class, 'store']);
		Route::post('/update/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('destroy');
	});

	// Variation Routes
	Route::group(['prefix' => 'variation', 'as' => 'variation.'], function(){
	    Route::get('/', [App\Http\Controllers\VariationController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\VariationController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\VariationController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\VariationController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\VariationController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\VariationController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\VariationController::class, 'destroy'])->name('destroy');
	});

	// Product Routes
	Route::group(['prefix' => 'product', 'as' => 'product.'], function(){
	    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\ProductController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');
	});

	// Order Routes
	Route::group(['prefix' => 'order', 'as' => 'order.'], function(){
	    Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('index');
	    Route::get('/status/{id}', [App\Http\Controllers\OrderController::class, 'orders_by_status'])->name('status.filter');
	    //Route::get('/create', [App\Http\Controllers\OrderController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\OrderController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\OrderController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('destroy');

		Route::post('/change-status/{id}', [App\Http\Controllers\OrderController::class, 'change_status'])->name('status.change');
		Route::post('/change-payment-status/{id}', [App\Http\Controllers\OrderController::class, 'change_payment_status'])->name('payment.status.change');
		// Invoice route
		Route::get('/generate-invoice/{id}', [App\Http\Controllers\OrderController::class, 'generate_invoice'])->name('invoice.generate');

		// Report routes
		Route::get('/current-year', [App\Http\Controllers\OrderController::class, 'current_year'])->name('current.year');
		Route::get('/current-month', [App\Http\Controllers\OrderController::class, 'current_month'])->name('current.month');
		Route::get('/today', [App\Http\Controllers\OrderController::class, 'today'])->name('today');
		Route::get('/search', [App\Http\Controllers\OrderController::class, 'search'])->name('search');
	});

	// Coupone Routes
	Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function(){
	    Route::get('/', [App\Http\Controllers\CouponController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\CouponController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\CouponController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\CouponController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\CouponController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\CouponController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\CouponController::class, 'destroy'])->name('destroy');
	});

	// RegistrationPoint Routes
	Route::group(['prefix' => 'registration-point', 'as' => 'registration.point.'], function(){
	    Route::get('/', [App\Http\Controllers\RegistrationPointController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\RegistrationPointController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\RegistrationPointController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\RegistrationPointController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\RegistrationPointController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\RegistrationPointController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\RegistrationPointController::class, 'destroy'])->name('destroy');
	});

	// Slider Routes
	Route::group(['prefix' => 'slider', 'as' => 'slider.'], function(){
	    Route::get('/', [App\Http\Controllers\SliderController::class, 'index'])->name('index');
	    Route::get('/create', [App\Http\Controllers\SliderController::class, 'create'])->name('create');
		Route::post('/store', [App\Http\Controllers\SliderController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\SliderController::class, 'store']);
		Route::get('/edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('edit');
		Route::post('/update', [App\Http\Controllers\SliderController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('destroy');
	});

	// Pages in Admin
	Route::group(['prefix' => 'page', 'as' => 'page.'], function(){
	    
	    Route::get('/', [App\Http\Controllers\AdminPageController::class, 'index'])->name('index');
	    Route::get('/edit/{id}', [App\Http\Controllers\AdminPageController::class, 'edit'])->name('edit');
		Route::post('/update/{id}', [App\Http\Controllers\AdminPageController::class, 'update'])->name('update');
	});

	// Setting Routes
	Route::group(['prefix' => 'setting', 'as' => 'setting.'], function(){
	    Route::get('/', [App\Http\Controllers\SettingController::class, 'index'])->name('index');
		Route::post('/update/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('update');
		Route::get('/reward-point', [App\Http\Controllers\SettingController::class, 'reward_point'])->name('reward.point');
		Route::post('/reward-point/update/{id}', [App\Http\Controllers\SettingController::class, 'reward_point_update'])->name('reward.point.update');

		Route::get('/home-about', [App\Http\Controllers\SettingController::class, 'homeAbout'])->name('home.about');

		Route::post('/home-about', [App\Http\Controllers\SettingController::class, 'homeAboutStore'])->name('home.about.store');
	});

	// Affiliate Routes
	Route::group(['prefix' => 'affiliate', 'as' => 'affiliate.'], function(){
	    Route::get('/configuration', [App\Http\Controllers\SettingController::class, 'config'])->name('config');
	    Route::post('/config/update/{id}', [App\Http\Controllers\SettingController::class, 'config_update'])->name('config.update');
	    Route::get('/request', [App\Http\Controllers\SettingController::class, 'affiliate_request'])->name('request');
	    Route::get('/status/{id}/{status}', [App\Http\Controllers\SettingController::class, 'affiliate_status'])->name('status');
	    Route::get('/payment-request', [App\Http\Controllers\PaymentController::class, 'payment_request'])->name('payment.request');
	    Route::post('/payment-transfer/{id}', [App\Http\Controllers\PaymentController::class, 'payment_transfer'])->name('payment.transfer');
	    Route::post('/payment-reject/{id}', [App\Http\Controllers\PaymentController::class, 'payment_reject'])->name('payment.reject');
	});

	// Referral Link Generate
	Route::group(['prefix' => 'referral-link', 'as' => 'referral.link.'], function(){
	    
	    Route::get('/', [App\Http\Controllers\SettingController::class, 'referral_link'])->name('index');
	});

	// Profile Routes
	Route::group(['prefix' => 'profile', 'as' => 'user.'], function(){
	    
	    Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
	    Route::post('/update', [App\Http\Controllers\ProfileController::class, 'profile_update'])->name('profile.update');
	    Route::post('/change-password', [App\Http\Controllers\ProfileController::class, 'change_password'])->name('password.change');
	});

	//Subscribers in admin
	Route::get('/subscribers', [App\Http\Controllers\SubscriberController::class, 'index'])->name('admin.subscribers');

	// Gallery Routes
	Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function(){
	    Route::get('/', [App\Http\Controllers\GalleryController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\GalleryController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\GalleryController::class, 'store']);
		Route::post('/destroy/{id}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('destroy');

		//banner image
		Route::get('/banner-one', [App\Http\Controllers\GalleryController::class, 'bannerOne'])->name('banner.one');
		Route::post('/banner-one', [App\Http\Controllers\GalleryController::class, 'bannerOneStore'])->name('banner.store');

		//banner two image
		Route::get('/banner-two', [App\Http\Controllers\GalleryController::class, 'bannerTwo'])->name('banner.two');
		Route::post('/banner-two', [App\Http\Controllers\GalleryController::class, 'bannerTwoStore'])->name('banner.two.store');

		//deal of the day
		Route::get('/deal-day', [App\Http\Controllers\GalleryController::class, 'dealOfTheDay'])->name('deal.day');
		Route::post('/deal-day', [App\Http\Controllers\GalleryController::class, 'dealOfTheDayStore'])->name('deal.day.store');
	});

	// District Routes
	Route::group(['prefix' => 'district', 'as' => 'district.'], function(){
	    Route::get('/', [App\Http\Controllers\DistrictController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\DistrictController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\DistrictController::class, 'store']);
		Route::post('/update/{id}', [App\Http\Controllers\DistrictController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\DistrictController::class, 'destroy'])->name('destroy');
	});

	// Area Routes
	Route::group(['prefix' => 'area', 'as' => 'area.'], function(){
	    Route::get('/', [App\Http\Controllers\AreaController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\AreaController::class, 'store'])->name('store');
		Route::post('/stote', [App\Http\Controllers\AreaController::class, 'store']);
		Route::post('/update/{id}', [App\Http\Controllers\AreaController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\AreaController::class, 'destroy'])->name('destroy');
	});
	
	// blog Routes
	Route::group(['prefix' => 'blog', 'as' => 'blog.'], function(){
	    Route::get('/create', [App\Http\Controllers\BlogController::class, 'index'])->name('create');
	    Route::post('/store', [App\Http\Controllers\BlogController::class, 'store'])->name('store');
		Route::get('/list', [App\Http\Controllers\BlogController::class, 'list'])->name('list');
		Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('edit');
		Route::post('/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('destroy');
		Route::post('/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('update');
	});

	// blog Routes
	Route::group(['faq' => 'faq', 'as' => 'faq.'], function(){
		Route::get('/create', [App\Http\Controllers\FaqController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\FaqController::class, 'store'])->name('store');
		Route::get('/list', [App\Http\Controllers\FaqController::class, 'list'])->name('list');
		Route::get('/edit/{id}', [App\Http\Controllers\FaqController::class, 'edit'])->name('edit');
		Route::post('/destroy/{id}', [App\Http\Controllers\FaqController::class, 'destroy'])->name('destroy');
		Route::post('/update/{id}', [App\Http\Controllers\FaqController::class, 'update'])->name('update');
	});

	Route::group(['prefix' => 'store-menu', 'as' => 'store-menu.'], function(){
		Route::get('/', [App\Http\Controllers\StoreMenuController::class, 'index'])->name('index');
		Route::post('/store', [App\Http\Controllers\StoreMenuController::class, 'store'])->name('store');
		Route::post('/update/{id}', [App\Http\Controllers\StoreMenuController::class, 'update'])->name('update');
		Route::post('/destroy/{id}', [App\Http\Controllers\StoreMenuController::class, 'destroy'])->name('destroy');
	});

});