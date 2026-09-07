<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\District;
use Illuminate\Support\Str;
use Cart;
use Auth;
use Alert;
use Carbon\Carbon;
use Session;

class CartController extends Controller
{
    public function index()
    {
    	$carts = Cart::content();
        return view('pages.cart', compact('carts'));
    }

    public function add_cart(Request $request)
    {
    	$product_id = $request->product_id;
    	$qty = $request->quantity;
    	$product = Product::find($product_id);
    	if (!is_null($product)) {
            
			Cart::add([
	            'id' => $product->id,
	            'qty' => $qty,
	            'price' => ($product->is_sale == 1 ? ($product->discount_price != NULL ? $product->discount_price : $product->price) : $product->price),
	            'name' => $product->title,
	            'weight' => 500,
	            'options' => [
	                'image' => $product->image
	            ],
	        ]);
    	}

        $cart_sidebar = $this->generate_cart();
        
        return ['total_count' => Cart::count(), 'total_amount' => env('CURRENCY').Cart::subtotal(), 'cart_sidebar' => $cart_sidebar];
    }

    public function generate_cart()
    {
        $carts = Cart::content();
        $total = 0;
        $cart_sidebar = '';
        $subTotal = 0;
        foreach ($carts as $cart){
            
            $total += $cart->price * $cart->qty;
            $cart_sidebar .= '<li>
            <a href="' . route('single.product', [$cart->id, Str::slug($cart->name)]) .'" class="image"><img src="' .asset('images/product/' . $cart->options->image). '" alt="Cart product Image"></a>
            
            <div class="content">
                <a href="' . route('single.product', [$cart->id, Str::slug($cart->name)]) .'" class="title" >'. $cart->name .'</a>
                <span class="quantity-price"> '.$cart->qty.' x <span class="amount">' .env('CURRENCY').$cart->price. env('UAE_CURRENCY') . '</span></span>
                
            </div>
        </li>';
       
        } 

        $cart_sidebar .='<strong>Subtotal :</strong>
        <span class="amount">'. env('CURRENCY') . Cart::subtotal() . env('UAE_CURRENCY').' </span>';
        // $cart_sidebar =  Cart::subtotal();
        
        return [$cart_sidebar,$subTotal];
        
    }


    public function show_cart()
    {
        $carts = Cart::content();
        return view('shopping-cart', compact('carts'));
        //dd($carts);
    }

    public function update_cart(Request $request)
    {
        
        Cart::update($request->rowId, $request->qty);
        return back();
    }

    public function remove_cart(Request $request)
    {
        Cart::remove($request->rowId);
        return back();
    }

    public function check_discount()
    {
        $discount = Discount::where('is_active', 1)->first();
        $sale = false;
        if (!is_null($discount)) {
            $discount_from = Carbon::createFromFormat('Y-m-d H:i:s', $discount->from.' 00:00:00');
            $discount_to = Carbon::createFromFormat('Y-m-d H:i:s', $discount->to.' 23:59:59');
            if (($discount_from->isPast()) && !($discount_to->isPast())) {
                $sale = true;
            }
            else {
                $sale = false;
            }
        }
        else {
            $sale = false;
        }
        return $sale;
    }

    public function apply_coupon(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
        ]);

        $code = $request->code;

        $coupon = Coupon::where('code', $code)->orderBy('id', 'DESC')->first();
        if (!is_null($coupon)) {
            $valid_to = Carbon::createFromFormat('Y-m-d H:i:s', $coupon->valid_to.' 23:59:59');
            if ($valid_to->isPast()) {
                session()->flash('invalid','Invalid Coupon');
                return back();
            }
            else {
                $discount = 0;
                if ($coupon->discount == NULL) {
                    $discount = $coupon->amount;
                }
                if ($coupon->amount == NULL) {
                    $discount = ($coupon->discount/100) * Cart::subtotal();
                }
                Session::forget('coupon_discount');
                if ($discount > Cart::subtotal()) {
                    session(['coupon_discount' => Cart::subtotal()]);
                }
                else {
                    session(['coupon_discount' => $discount]);
                }
                if ($coupon->single_use == 1) {
                    session(['coupon_single_use' => $coupon->single_use]);
                }
                session()->flash('success','Coupon Applied');
                return back();
            }
            
        }
        else {
            Session::forget('coupon_discount');
            session()->flash('invalid','Invalid Coupon');
            return back();
        }
    }

    public function remove_coupon()
    {
        Session::forget('coupon_discount');
        return back();
    }

    public function buy_now(Request $request)
{
    $product_id = $request->product_id;
    $qty = $request->quantity ?? 1;

    $product = Product::find($product_id);

    if (is_null($product)) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    Cart::destroy();

    Cart::add([
        'id' => $product->id,
        'qty' => $qty,
        'price' => ($product->is_sale == 1
            ? ($product->discount_price != NULL ? $product->discount_price : $product->price)
            : $product->price),
        'name' => $product->title,
        'weight' => 500,
        'options' => [
            'image' => $product->image
        ],
    ]);

    return redirect()->route('checkout');
}
    public function checkout()
    {
        $carts = Cart::content();
        $districts = District::orderBy('id', 'DESC')->get();
        return view('pages.checkout', compact('carts', 'districts'));
    }
}