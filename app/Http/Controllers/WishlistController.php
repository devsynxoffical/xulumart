<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
use Alert;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_wishlist(Request $request)
    {
        $product = Product::find($request->product_id);
        $auth = 0;
        if (!is_null($product)) {
            if (Auth::check()) {
                $auth = 1;
                $wishlist = Wishlist::where('customer_id', Auth::id())->where('product_id', $request->product_id)->first();
                if (is_null($wishlist)) {
                    $wishlist = new Wishlist;
                    $wishlist->customer_id = Auth::id();
                    $wishlist->product_id = $product->id;
                    $wishlist->save();
                    return ['status' => 1, 'auth' => $auth];
                }
                else{
                    return ['status' => 2, 'auth' => $auth];
                }
            }
            else{
                return ['status' => 2, 'auth' => $auth];
            }
        }
        else{
            return ['status' => 0, 'auth' => $auth];
        }
    }

        public function add_wishlist_lara($id)
        {
            // Find the product by its ID
            $product = Product::find($id);
            $auth = 0;
        
            if ($product) {
                if (Auth::check()) {
                    $auth = 1;
        
                    // Check if the product is already in the user's wishlist
                    $wishlist = Wishlist::where('customer_id', Auth::id())->where('product_id', $id)->first();
        
                    if (!$wishlist) {
                        // Add the product to the wishlist
                        $wishlist = new Wishlist;
                        $wishlist->customer_id = Auth::id();
                        $wishlist->product_id = $product->id;
                        $wishlist->save();
        
                        // Return a success response
                        return response()->json(['status' => 1, 'auth' => $auth, 'message' => 'Product Added in wishlist']);
                    } else {
                        // Return a response if the product is already in the wishlist
                        return response()->json(['status' => 0, 'message' => 'Product already in wishlist']);
                    }
                } else {
                    // If the user is not logged in, return an error response
                    return response()->json(['status' => 0, 'message' => 'Login required']);
                }
            } else {
                // If the product is not found, return an error response
                return response()->json(['status' => 0, 'message' => 'Product not found']);
            }
        }

        public function add_wishlist_lara_count(){
            $count = Wishlist::where('customer_id', Auth::id())->count();
            return response()->json(['status' => 1, 'count' => $count]);
        }
        

    public function remove_wishlist(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        if (!is_null($wishlist)) {
            $wishlist->delete();
            Alert::success('Product removed from wishlist', '');
            return back();
        }
        else{
            Alert::error('Something went wrong!', '');
            return back();
        }
    }

    public function remove_wishlist_lara(Request $request, $id){
        $wishlist = Wishlist::find($id);
        if (!is_null($wishlist)) {
            $wishlist->delete();
            Alert::success('Product removed from wishlist', '');
            return back();
        }
        else{
            Alert::error('Something went wrong!', '');
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
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
