<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use Cart;
use File;
use Mail;
use Alert;
use Image;
use Session;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Page;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Query;

use App\Models\Coupon;
use App\Models\Slider;
use App\Models\Wallet;
use App\Mail\OrderMail;
use App\Models\Gallery;
use App\Models\Payment;
use App\Models\Product;

use App\Models\Category;
use App\Models\Wishlist;
use App\Mail\ContactMail;
use App\Models\Variation;
use App\Models\Subscriber;
use App\Models\WalletEntry;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use App\Models\VariationProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        if ($request->has('referral')) {
            $id = $request->referral;
            if (!is_null($id)) {
                $user = User::find($id);
                if (!is_null($user)) {
                    session(['referral_id' => $id]);
                }
            }
        }
        $products = Product::where('is_active', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $random_products = Product::where('is_active', 1)->inRandomOrder()->limit(8)->get();
        $deals = Product::where('is_active', 1)->inRandomOrder()->limit(2)->get();
        $categories = Category::where('is_active', 1)->where('parent_id', 0)->orderBy('position', 'ASC')->get();
        $featured_categories = Category::where('is_active', 1)->where('is_featured', 1)->orderBy('position', 'ASC')->limit(5)->get();
        if ($featured_categories->count() < 5) {
            $featured_categories = $categories->take(5);
        }
        $sliders = Slider::all();
        $top_sales = Product::where('is_active', 1)->orderBy('sold', 'DESC')->limit(8)->get();
        $page = Page::find(1);
        $home_about = DB::table('home_abouts')->orderBy('id', 'desc')->first();
        $flashSales = Product::where('is_active', 1)->where('flash_sale', 1)->limit(8)->get();
        $newArrivalProducts = Product::where('is_active', 1)->where('is_new', 1)->orderBy('id', 'DESC')->limit(8)->get();
        if ($newArrivalProducts->isEmpty()) {
            $newArrivalProducts = $products;
        }
        $dealOfDay = Product::where('deal_of_day', 1)->where('is_active', 1)->latest()->first();
        $faqs = \App\Models\Faq::all();

        return view('pages.index', compact(
            'products', 'categories', 'featured_categories', 'deals', 'random_products',
            'sliders', 'page', 'top_sales', 'home_about', 'flashSales',
            'newArrivalProducts', 'dealOfDay', 'faqs'
        ));
    }

    public function products()
    {
        $products = Product::where('is_active', 1)->inRandomOrder()->select(['title', 'image', 'id'])->paginate(16);
        $page = Page::find(2);
        $min_price = Product::min('price');
        $max_price = Product::max('price');
        return view('pages.products', compact('products', 'page', 'min_price', 'max_price'));
    }

    public function offer_products()
    {
        $products = Product::where('is_active', 1)->where('is_sale', 1)->orderBy('id', 'DESC')->get();
        $page = Page::find(7);
        return view('pages.offer-products', compact('products', 'page'));
    }

    public function single_product($id, $slug)
    {
        $product = Product::with(['product_image', 'variation'])->find($id);

        if (!is_null($product)) {
            //dd(json_decode($product->choice_options, true));
            $category = Category::find($product->category_id); // may be null - guarded in the view with optional()
            $similar_products = Product::where('category_id', $product->category_id)
                                    ->where('id', '!=', $product->id)
                                    ->where('is_active', 1)
                                    ->inRandomOrder()->limit(4)->get();
            // Already-in-cart quantity for this product, so we don't let people add more than is in stock.
            $already_in_cart = 0;
            foreach (Cart::content() as $c) {
                if ($c->id == $product->id) { $already_in_cart += $c->qty; }
            }
            // BUGFIX: `qty` is a nullable DB column. Products where stock was
            // never entered by an admin had qty = null, which (int) casts to 0,
            // permanently disabling Add to Cart / Buy Now for that product even
            // though it's meant to be sellable. Treat "qty not set" as
            // "stock not tracked / unlimited" instead of "0 in stock" so the
            // buttons only disable when a real, explicit stock count hits 0.
            $available_stock = is_null($product->qty)
                ? null
                : max(0, (int) $product->qty - $already_in_cart);

            // Build the product image gallery here (not in the Blade file) so it's
            // a guaranteed, traceable controller variable - never dependent on
            // Blade view compilation/caching behavior.
            $gallery = collect();
            if ($product->image) { $gallery->push($product->image); }
            foreach ($product->product_image as $img) {
                if ($img->image) { $gallery->push($img->image); }
            }
            if ($product->hover_image) { $gallery->push($product->hover_image); }
            $gallery = $gallery->unique()->values();

            // Discount calculation - also moved out of the Blade file for the same reason.
            $hasDiscount = ($product->is_sale == 1 && $product->discount_price > 0);
            $discountPercent = 0;
            if ($hasDiscount && $product->price > 0) {
                $discountPercent = round((($product->price - $product->discount_price) / $product->price) * 100);
            }

            // $business - used for the "Contact Us" phone number button, moved
            // out of the Blade file (same reason as $gallery and $hasDiscount).
            $business = \App\Models\Setting::find(1);

            return view ('pages.product.details',compact('product', 'similar_products','category', 'available_stock', 'gallery', 'hasDiscount', 'discountPercent', 'business'));

        }

        else{
            session()->flash('error','Page Not Found');
            return back();
        }
    }

    public function categories()
    {
        $categories = Category::where('is_active', 1)->where('parent_id', 0)->orderBy('position', 'ASC')->get();
        return view('pages.categories', compact('categories'));
    }

    public function category_products($id, $slug)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->orWhere('sub_category_id', $id)->where('is_active', 1)->select(['title', 'image','hover_image','is_sale','price','discount_price', 'id'])->paginate(30);
        if (!is_null($category)) {
            return view('pages.category-product', compact('category', 'products'));
        }
        else{
            session()->flash('error','Page Not Found');
            return back();
        }
    }

    public function brand_products($id, $slug)
    {
        $brand = Brand::find($id);
        $products = Product::where('brand_id', $id)->where('is_active', 1)->paginate(30);
        if (!is_null($brand)) {
            return view('pages.brand-product', compact('brand', 'products'));
        }
        else{
            session()->flash('error','Page Not Found');
            return back();
        }
    }

    public function search(Request $request)
    {
          $query = $request->get('search');
          $filterResult = Product::where('title', 'LIKE', '%'. $query. '%')
          ->orWhere('description', 'LIKE', '%'. $query. '%')
          ->where('is_active', 1)
          ->pluck('title');
          // $filterResult = Product::where('title', 'LIKE', '%'. $query. '%')
          // ->orWhere('description', 'LIKE', '%'. $query. '%')
          // ->where('is_active', 1)
          // ->get();
          return $filterResult;
    } 

    public function search_result(Request $request)
    {
        $query = $request->search;
        $products = Product::where('title', 'LIKE', '%'. $query. '%')->orWhere('description', 'LIKE', '%'. $query. '%')->get();
        return view('pages.search-result', compact('products'));

    }

    public function product_filter(Request $request)
    {
        $category_id = $request->category_id;
        $brand_id = $request->brand_id;
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        if ($category_id != 'all' && $brand_id != 'all') {
            $products = Product::where('category_id', $category_id)->where('brand_id', $brand_id)->whereBetween('price', [$min_price, $max_price])->where('is_active', 1)->get();
        }
        else if ($category_id != 'all' && $brand_id == 'all') {
            $products = Product::where('category_id', $category_id)->whereBetween('price', [$min_price, $max_price])->where('is_active', 1)->get();
        }
        else if ($category_id == 'all' && $brand_id != 'all') {
            $products = Product::where('brand_id', $brand_id)->whereBetween('price', [$min_price, $max_price])->where('is_active', 1)->get();
        }
        else{
            $products = Product::where('is_active', 1)->whereBetween('price', [$min_price, $max_price])->get();
        }

        $product_filtered = '';

        foreach ($products as $product) {
            $product_filtered .= '
                <div class="product-wrap product text-center" style="">
                    <div style="border: 1px solid blue;padding-bottom: 15px;margin: 0px 5px;">
                    <figure class="product-media">
                        <a href="'. route('single.product', [$product->id, Str::slug($product->title)]) .'">
                            <img src="'. asset('images/product/'. $product->image) .'" alt="Product"
                                width="216" height="243" />
                        </a>
                        <div class="product-action-vertical">
                            <a onclick="addToCart('. $product->id .')" class="btn-product-icon w-icon-cart peoduct_cart"
                                title="Add to cart"></a>
                            <a onclick="addToWishlist('. $product->id .')" class="btn-product-icon w-icon-heart peoduct_cart"
                                title="Add to wishlist"></a>
                            
                        </div>
                    </figure>
                    <div class="product-details">
                        <h4 class="product-name"><a href="'. route('single.product', [$product->id, Str::slug($product->title)]) .'">'. $product->title .'</a>
                        </h4>
                        <p>'. $product->weight . $product->unit.'</p>
                        <div class="product-price">';
                            if($product->type == 'single'){
                                if ($product->is_sale == 1) {
                                    $product_filtered .= '<ins class="new-price">'. env('CURRENCY') .  $product->discount_price . env('UAE_CURRENCY') .'</ins><del class="old-price">'. env('CURRENCY') . $product->price . env('UAE_CURRENCY') .'</del>';
                                }
                                else{
                                    $product_filtered .= '<ins class="new-price">'. env('CURRENCY') .  $product->price . env('UAE_CURRENCY') .'</ins>';
                                }
                            }
                            else{
                                if(count($product->variation) == 1){

                                    $product_filtered .='<ins class="new-price">'. env('CURRENCY') . $product->variation->first()->price . env('UAE_CURRENCY') .'</ins>';
                                }
                                else{
                                    $product_filtered .='<ins class="new-price">'. env('CURRENCY') . $product->variation->where('price', $product->variation->min('price'))->first()->price . env('UAE_CURRENCY') . '-' .  env('CURRENCY') . $product->variation->where('price', $product->variation->max('price'))->first()->price  .env('UAE_CURRENCY') .'</ins>';
                                }
                            }
                        $product_filtered .='</div>
                        <button onclick="addToCart('. $product->id .')" class="btn btn-primary added_to_cart_'. $product->id;
                            if ( !is_null(Cart::content()->where('id', $product->id)->first())) {
                                $product_filtered .= ' added_to_cart';
                            }
                            else{
                                $product_filtered .= ' ';
                            }

                        $product_filtered .= '" id="">';
                            if ( !is_null(Cart::content()->where('id', $product->id)->first())) {
                                $product_filtered .= 'Added To Cart';
                            }
                            else{
                                $product_filtered .= 'Add to Cart';
                            }
                    $product_filtered .= '</button></div>
                    </div>
                </div>
                        ';
        }
        return ['product_filtered' => $product_filtered];
    }

    public function generate_product_filter()
    {
        
    }

    public function about()
    {
        $page = Page::find(4);
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        // return view('pages.about', compact('page', 'galleries'));
        return view('pages.laramart_about', compact('page', 'galleries'));
    }

    public function privacy_policy()
    {
        $page = Page::find(5);
        return view('pages.privacy-policy', compact('page'));
    }

    public function term_condition()
    {
        $page = Page::find(6);
        return view('pages.terms-and-conditions', compact('page'));
    }

    /**
     * Frontend FAQ page - reuses the FAQ entries already managed from the
     * admin panel (admin.faq.index), so no new admin UI is needed.
     */
    public function faqs_page()
    {
        $faqs = \App\Models\Faq::orderBy('id', 'DESC')->get();
        return view('pages.faqs', compact('faqs'));
    }

    /**
     * Static Shipping Policy / Returns & Refunds pages, referenced from the
     * footer. There's no admin UI for these yet, so the content lives in
     * the Blade view - safe to edit directly, and doesn't touch the DB.
     */
    public function shipping_policy()
    {
        return view('pages.shipping-policy');
    }

    public function returns_refunds()
    {
        return view('pages.returns-refunds');
    }

    public function contact()
    {
        // return view('pages.contact');
        return view('pages.laramart_contact');
    }

    public function send_message(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ]);

        Mail::send(new ContactMail($request));


        session()->flash('success', 'Thank you for contacting us, we will be in touch within 24 to 48 hours');
        return redirect()->route('contact');
    }
    
     public function send_query(Request $request)
    {
        // dd($request->all());
        
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required',
        // ]);
        
        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->subject = $request->subject;
        $query->message = $request->message;
        $query->save();

        // Mail::send(new ContactMail($request));


        session()->flash('success', 'Thank you for contacting us, we will be in touch within 24 to 48 hours');
        Alert::success('Thanks, Welcome to our NEWSLETTER', '');
        return redirect()->route('contact');
    }


    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $subscriber = Subscriber::where('email',$request->email)->first();
        if (is_null($subscriber)) {
            $subscriber = new Subscriber;
            $subscriber->email = $request->email;
            $subscriber->save();

            Alert::success('Thanks, Welcome to our NEWSLETTER', '');
            return back();
        }
        else {
            Alert::error('Thanks, You already subscribed us!', '');
            return back();
        } 
    }

    /**
     * AJAX endpoint for the website signup/info-collection popup.
     * Reuses the existing `subscribers` table so we don't create a
     * separate/duplicate storage mechanism. If the email already exists,
     * we just fill in any missing name/phone instead of creating a new row.
     */
    public function popupSubscribe(Request $request)
    {
        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ], [
            'name.required'  => 'Please enter your name.',
            'phone.required' => 'Please enter your phone number.',
            'email.required' => 'Please enter your email address.',
            'email.email'    => 'Please enter a valid email address.',
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        if (is_null($subscriber)) {
            $subscriber = new Subscriber;
            $subscriber->email = $request->email;
            $subscriber->name  = $request->name;
            $subscriber->phone = $request->phone;
            $subscriber->save();
        } else {
            // Don't duplicate - just fill in anything missing for this existing subscriber.
            if (!$subscriber->name)  $subscriber->name  = $request->name;
            if (!$subscriber->phone) $subscriber->phone = $request->phone;
            $subscriber->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will get in touch with you soon.',
        ]);
    }

    public function my_orders()
    {
        if (Auth::check()) {
            $orders = Order::where('customer_id', Auth::id())->get();
            return view('pages.customer.orders', compact('orders'));
        }
        else{
            return redirect()->route('index');
        }
    }

    public function my_wishlist()
    {
        $wishlists = Wishlist::where('customer_id', Auth::id())->get();
        return view('pages.customer.wishlist', compact('wishlists'));
    }

    public function my_account()
    {
        if (Auth::check()) {
            if (Auth::user()->type == 1) {
                return redirect()->route('home');
            }
            else{
                $orders = Order::where('customer_id', Auth::id())->get();
                $wishlists = Wishlist::where('customer_id', Auth::id())->get();
                return view('pages.customer.account', compact('orders', 'wishlists'));
            }
        }
        else{
            return redirect()->route('index');
        }
    }

    public function customer_account_update(Request $request, $id)
    {
        $customer = User::find($id);
        if (!is_null($customer)) {
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;

            // image save
            if ($request->image){
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/customer/'. $img);
                Image::make($image)->save($location);
                $customer->image = $img;
            }

            // NID save
            if ($request->nid){
                $nid = $request->file('nid');
                $img = time() . '.' . $nid->getClientOriginalExtension();
                $location = public_path('images/customer/nid/'. $img);
                Image::make($nid)->save($location);
                $customer->nid = $img;
            }

            $customer->save();
            Alert::success('Profile Updated!', '');
            return back();
        }
        else{
            Alert::error('Something went wrong!', '');
            return back();
        }
    }

    public function change_password(Request $request)
    {
        $user = Auth::user();
        $c_password = $request->c_password;
        $n_password = $request->n_password;
        $cf_password = $request->cf_password;
        //dd(Hash::make($c_password));
        if (Hash::check($request->c_password, $user->password)) {
            if ($n_password == $cf_password) {
                $user->password = Hash::make($n_password);
                $user->save();
                Alert::success('Password has been updated', '');
                return back();
            }
            else {
                Alert::error('Password do not match !', '');
                return back();
            }
        }
        else{
            Alert::error('Your current password is wrong !', '');
            return back();
        }
    }

    public function my_wallet()
    {
        if (Auth::check()) {
            if (Auth::user()->type == 1) {
                return redirect()->route('home');
            }
            else{
                $wallet = Wallet::where('customer_id', Auth::id())->first();
                return view('pages.customer.wallet', compact('wallet'));
            }
        }
        else{
            return redirect()->route('index');
        }
    }

    public function my_wallet_point_convert(Request $request)
    {
        if (Auth::check()) {
            $validatedData = $request->validate([
                'point' => 'required|numeric',
            ]);
            
            //dd($request->all());

            $wallet = Wallet::where('customer_id', Auth::id())->first();
            if (!is_null($wallet)) {
                $point = $request->point;
                $minimum_point = $request->minimum_point;
                if ($point >= $minimum_point) {
                    $entry = new WalletEntry;
                    $entry->wallet_id = $wallet->id;
                    $entry->point_out = $point;
                    $entry->cash_in = $point/$minimum_point;
                    $entry->note = 'Point Conversion';
                    $entry->save();
                    Alert::success('Point Conversion Successful!');
                    return back();
                }
                else{
                    Alert::error('Minimum Point Not Matched');
                    return back();
                }
            }
            else{
                Alert::error('Walet Not Found!');
                return back();
            }
        }
        else{
            return redirect()->route('index');
        }
    }

    // Affliate Request Submit
    public function affiliate_apply()
    {
        $customer = User::find(Auth::id());
        $customer->affiliate_applied = 1;
        $customer->save();
        Alert::success('Your application is pending for admin approval');
        return back();
    }

    public function affiliate_dashboard()
    {
        if (Auth::check()) {
            $orders = Order::where('referral_id', Auth::id())->get();
            $referrals = User::where('referral_id', Auth::id())->get();
            $payments = Payment::where('customer_id', Auth::id())->orderBy('id', 'DESC')->get();
            $coupons = Coupon::where('affiliate_id', Auth::id())->get();
            return view('pages.customer.affiliate-dashboard', compact('orders', 'referrals', 'payments', 'coupons'));
        }
        else{
            return redirect()->route('index');
        }
    }

    public function payment_request(Request $request)
    {
        if (Auth::check()) {
            $validatedData = $request->validate([
                    'request_amount' => 'required|numeric',
                ]);
            $payment = new Payment;
            $payment->customer_id = Auth::id();
            $payment->request_amount = $request->request_amount;
            $payment->note = 'Payment Requested';
            $payment->save();
            Alert::success('Your payment request has been submitted');
            return back();
        }
        else{
            return redirect()->route('index');
        }
    }

    public function coupone_store(Request $request)
    {
        if (Auth::check()) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:255',
                'discount' => 'required|numeric',
                'coupon_type' => 'required|string',
                'valid_to' => 'required|date',
            ]);
            $coupon = new Coupon;
            $coupon->name = $request->name;
            $coupon->code = $request->code;
            if ($request->coupon_type == 'percent') {
                $coupon->discount = $request->discount;
            }
            if ($request->coupon_type == 'flat') {
                $coupon->amount = $request->discount;
            }
            $coupon->valid_from = date('Y-m-d');
            $coupon->valid_to = $request->valid_to;
            if ($request->has('single_use')) {
                $coupon->single_use = 1;
            }
            $coupon->affiliate_id = Auth::id();

            $coupon->save();

            Alert::success('Coupon Added Successfully');
            return back();
        }
        else{
            return redirect()->route('index');
        }
    }

    public function coupone_update(Request $request, $id)
    {
        if (Auth::user()->type == 2) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:255',
                'discount' => 'required|numeric',
                'valid_to' => 'required|date',
            ]);
            $coupon = Coupon::find($id);
            if (!is_null($coupon)) {
                $coupon->name = $request->name;
                $coupon->code = $request->code;
                $coupon->discount = $request->discount;
                $coupon->valid_to = $request->valid_to;
                if ($request->coupon_type == 'percent') {
                    $coupon->discount = $request->discount;
                    $coupon->amount = NULL;
                }
                if ($request->coupon_type == 'flat') {
                    $coupon->amount = $request->discount;
                    $coupon->discount = NULL;
                }
                $coupon->save();

                Alert::success('Coupon updated Successfully');
                return back();
            }
            else {
                session()->flash('error','Something went wrong!');
                return back();
            } 
        }
    }

    public function coupone_delete($id)
    {
        if (Auth::user()->type == 2) {
            $coupon = Coupon::find($id);
            if (!is_null($coupon)) {
                $coupon->delete();
                Alert::success('Coupon has been deleted');
                return back();
            }
            else {
                Alert::error('Something went wrong!');
                return back();
            }
        }
        else {
            Alert::error('Something went wrong!');
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function generateUniqueCode()
    {

        $characters = '0123456789';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }
        $code = date('y').'-'.$code;

        if (Order::where('code', $code)->exists()) {
            return $this->generateUniqueCode();
        }

        return $code;

    }

    public function order_create(Request $request)
    {
        // Guard against empty-cart order submissions (direct URL hits, expired session, etc.)
        if (Cart::count() == 0) {
            Alert::toast('Your cart is empty.', 'error');
            return redirect()->route('carts');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'city' => 'nullable|string|max:255',
            'district_id' => 'nullable|integer|exists:districts,id',
            'area_id' => 'nullable|integer',
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
            'shipping_zone' => 'nullable|string|in:inside,outside',
        ], [
            'shipping_address.required' => 'Please enter your shipping address.',
        ]);

        if (($request->shipping_zone ?? 'inside') === 'inside' && empty($request->district_id)) {
            return back()->withErrors(['district_id' => 'Please select your district.'])->withInput();
        }

        // Re-check stock at the moment of order (it may have changed since items were added to the cart).
        // BUGFIX: $product->qty is a nullable column meaning "stock not
        // tracked / unlimited" (see PageController::single_product for the
        // same rule). Comparing an int against null in PHP treats null as
        // 0, so this check used to reject every order containing a product
        // whose stock was never explicitly set - even though it was meant
        // to be freely sellable. Only enforce the stock check when qty is
        // an actual tracked number.
        foreach (Cart::content() as $cart) {
            $product = Product::find($cart->id);
            if (is_null($product) || !$product->is_active) {
                Alert::toast('One of the products in your cart is no longer available.', 'error');
                return redirect()->route('carts');
            }

            // If this cart line is for a specific size/variation, check
            // that variation's own stock instead of the base product's.
            $cartVariationId = optional($cart->options)->variation_id ?? null;
            if ($cartVariationId) {
                $variation = \App\Models\ProductVariation::find($cartVariationId);
                if (is_null($variation)) {
                    Alert::toast('One of the selected sizes is no longer available.', 'error');
                    return redirect()->route('carts');
                }
                if (!is_null($variation->qty) && $cart->qty > $variation->qty) {
                    Alert::toast('Sorry, "'.$product->title.' - '.$variation->variant.'" only has '.$variation->qty.' left in stock.', 'error');
                    return redirect()->route('carts');
                }
                continue;
            }

            if (!is_null($product->qty) && $cart->qty > $product->qty) {
                Alert::toast('Sorry, "'.$product->title.'" only has '.$product->qty.' left in stock.', 'error');
                return redirect()->route('carts');
            }
        }

        // Everything below writes to the database. Any unexpected failure here
        // (bad column, DB connection hiccup, etc.) is now caught and logged
        // instead of surfacing as a raw HTTP 500 to the customer.
        try {
            $order = new Order;
            $order->code = $this->generateUniqueCode();
            if (Auth::user()) {
                $order->customer_id = Auth::id();
            }

            $discount = 0;
            if (Session::has('coupon_discount')) {
                $discount = Session::get('coupon_discount');
            }

            $order->price = Cart::subtotal() - $discount;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->city = $request->city;
            $order->district_id = $request->district_id;
            $order->area_id = $request->area_id ?: null;
            $order->shipping_address = $request->shipping_address;
            $order->payment_method = $request->payment_method;
            if ($request->payment_method == 'Bkash') {
                $order->transaction_id = $request->bkash_transaction_id;
                $order->sender_phone = $request->bkash_phone;
                $order->sender_amount = $request->bkash_amount;
            }
            if ($request->payment_method == 'Rocket') {
                $order->transaction_id = $request->rocket_transaction_id;
                $order->sender_phone = $request->rocket_phone;
                $order->sender_amount = $request->rocket_amount;
            }

            $order->save();

            foreach (Cart::content() as $cart) {

                $order_product = new OrderProduct;

                $order_product->order_id = $order->id;
                $order_product->product_id = $cart->id;
                $order_product->price = $cart->price;
                $order_product->qty = $cart->qty;
                $order_product->product_id = $cart->id;
                $order_product->save();

                // Deduct the ordered quantity from stock - but only when
                // stock is actually being tracked for this product (qty is
                // not null). Otherwise `null - qty` would incorrectly turn
                // an "unlimited / not tracked" product into "0 in stock"
                // permanently after its very first order.
                $cartVariationId = optional($cart->options)->variation_id ?? null;
                if ($cartVariationId) {
                    $variation = \App\Models\ProductVariation::find($cartVariationId);
                    if ($variation && !is_null($variation->qty)) {
                        $variation->qty = max(0, $variation->qty - $cart->qty);
                        $variation->save();
                    }
                } else {
                    $product = Product::find($cart->id);
                    if ($product && !is_null($product->qty)) {
                        $product->qty = max(0, $product->qty - $cart->qty);
                        $product->save();
                    }
                }

                Cart::remove($cart->rowId);
            }

            if (!is_null($request->email)) {
                //Mail::send(new OrderMail($order));
            }

            Session::forget('coupon_discount');
            Alert::toast('Your order has been placed successfully!', 'success');
            return redirect()->route('order.complete', $order->id);

        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::error('Order creation failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
            Alert::toast('Sorry, we could not place your order right now. Please try again or contact us.', 'error');
            return redirect()->route('checkout');
        }
    }

    public function order_complete($id)
    {
        $order = Order::find($id); 
        if (!is_null($order)) {
            return view('pages.order-complete', compact('order'));
        }
        else{
            session()->flash('error','Page Not Found');
            return back();
        }
    }

    public function order_track()
    {
        return view('pages.track-order');
    }

    public function order_track_result(Request $request)
    {
        $code = $request->code;
        $order = Order::where('code', $code)->first();
        if (!is_null($order)) {
            return view('pages.track-order-result', compact('order'));
        }
        else{
            session()->flash('error','Page Not Found');
            return back();
        }
    }
    
    public function user_blog() {
        return view('pages.blog_index');
    }
    
    public function post_details($slug, Request $request) {
        $news_id = $request->s;
        $news_info = Blog::find($news_id);
        return view('pages.post_details', compact('news_info'));
    }

    public function flashSale(){
        $flash_products = Product::where('is_active', 1)->where('flash_sale', 1)->get();
        return view ('pages.flash_sale', compact('flash_products'));
    }
    
    
}