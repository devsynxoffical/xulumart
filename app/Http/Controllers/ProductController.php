<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variation;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $products = Product::orderBy('id', 'DESC')->get();
            return view('admin.product.index', compact('products'));
        }
        else{
            Alert::toast('Access Denied !', 'error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->type == 1) {
            $categories = Category::where('parent_id', 0)->orderBy('id', 'DESC')->get();
            $brands = Brand::orderBy('id', 'DESC')->get();
            return view('admin.product.create', compact('categories', 'brands' ));
        }
        else{
            Alert::toast('Access Denied !', 'error');
        }
    }

    public function generateUniqueCode()
    {

        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        if (Product::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }

        return $code;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->hover_image);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'sub_category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'hover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        
        $product = new Product;
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->qty = $request->qty;
        // $product->unit = $request->unit;
        // $product->size = $request->size;
        // $product->color = $request->color;
        // $product->febric = $request->febric;
        // $product->tubs = $request->tubs;
        // $product->handel = $request->handel;
        
        $product->features = $request->features;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        
        
        //$product->weight = $request->weight;
        $product->tags = $request->tags;
        $product->is_new = $request->is_new;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        //$product->type = $request->type;
        $product->type = 'single';
        if (!empty($request->code)) {
            $product->code = $request->code;
        }
        else{
            $product->code = $this->generateUniqueCode();
        }
        $product->price = $request->price;
        
        if ($request->has('is_sale')) {
            $product->is_sale = 1;
        }

        if ($request->has('is_special')) {
            $product->is_special = 1;
        }

        if ($request->has('flash_sale')) {
            $product->flash_sale = 1;
        }

        $product->discount_price = $request->discount_price;
        // $product->qty = $request->qty;

        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $img);
            $product->image = $img;
        }

        if ($request->hover_image){
            $image = $request->file('hover_image');
            $hoverimg = 'hover_' .time() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $hoverimg);
            $product->hover_image = $hoverimg;
        }
        
        $product->save();

        // Save size/variation rows submitted from the "Sizes / Variations"
        // section (optional - only rows with a non-empty label are saved).
        if ($request->has('variant')) {
            foreach ($request->variant as $i => $variantLabel) {
                if (trim((string) $variantLabel) === '') {
                    continue;
                }
                \App\Models\ProductVariation::create([
                    'product_id' => $product->id,
                    'variant' => $variantLabel,
                    'price' => $request->variant_price[$i] ?? $product->price,
                    'qty' => $request->variant_qty[$i] ?? null,
                ]);
            }
        }
        
        // check if any gallery image then save
        if ($request->hasFile('gallery')) {
            $i = 0;
            foreach ($request->file('gallery') as $gallery){
                $img = time() . '_' . $i . '_' . uniqid() . '.' . $gallery->getClientOriginalExtension();
                ImageUpload::save($gallery, 'images/product', $img);

                $galleryImage = new ProductImage;
                $galleryImage->image = $img;
                $galleryImage->product_id = $product->id;
                $galleryImage->save();
                $i = $i + 1;
            }
        }

        Alert::toast('Product Added!', 'success');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->type == 1) {
            $product = Product::find($id);
            if (!is_null($product)) {
                $categories = Category::where('parent_id', 0)->orderBy('id', 'DESC')->get();
                $sub_categories = optional($product->category)->child;
                $brands = Brand::orderBy('id', 'DESC')->get();
                return view('admin.product.edit', compact('product','categories', 'sub_categories', 'brands'));
            }
            else{
                Alert::toast('Page Not Found !', 'error');
            }
        }
        else{
            Alert::toast('Access Denied !', 'error');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'nullable|numeric',
            'qty' => 'nullable|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'sub_category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'deal_of_day_count' => 'nullable|date',
        ]);

        
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->title = $request->title;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->brand_id = $request->brand_id;
            $product->price = $request->price;
            // $product->unit = $request->unit;
            // $product->size = $request->size;
            // $product->color = $request->color;
            // $product->febric = $request->febric;
            // $product->tubs = $request->tubs;
            // $product->handel = $request->handel;
            
            //$product->weight = $request->weight;
            $product->features = $request->features;
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->is_active = $request->status ?? 1;

            // $product->type = $request->type;
            $product->tags = $request->tags;
            $product->meta_title = $request->meta_title;
            $product->meta_description = $request->meta_description;
            $product->meta_keywords = $request->meta_keywords;
            $product->qty = $request->qty;
            $product->type = 'single';
            if ( !empty($request->code)) {
                $product->code = $request->code;
            }
            else{
                $product->code = $this->generateUniqueCode();
            }

            if ($request->has('is_special')) {
                $product->is_special = 1;
            } else {
                $product->is_special = 0;
            }

            if ($request->has('deal_of_day')) {
                // Only one product can be the Deal Of The Day at a time.
                \App\Models\Product::where('id', '!=', $product->id)->where('deal_of_day', 1)->update(['deal_of_day' => 0]);
                $product->deal_of_day = 1;
            } else {
                $product->deal_of_day = 0;
            }

            if ($request->filled('deal_of_day_count')) {
                $product->deal_of_day_count = $request->deal_of_day_count;
            }

            // BUGFIX: was entirely commented out below, so toggling "On Sale"
            // in the admin edit form never actually saved anything - the
            // discount price/badge could never be turned off once set, and
            // could never be turned on for a product that didn't have it
            // set at creation time.
            if ($request->has('is_sale')) {
                $product->is_sale = 1;
            } else {
                $product->is_sale = 0;
            }

            if ($request->filled('discount_price')) {
                $product->discount_price = $request->discount_price;
            }

            if ($request->has('flash_sale')) {
                $product->flash_sale = 1;
            } else {
                $product->flash_sale = 0;
            }
            
            // $product->price = $request->price;
            // $product->discount_price = $request->discount_price;
            // $product->qty = $request->qty;

            // image save
            if ($request->hasFile('image')) {
                if ($product->image && File::exists(public_path('images/product/'.$product->image))) {
                    File::delete(public_path('images/product/'.$product->image));
                }
                $image = $request->file('image');
                $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                ImageUpload::save($image, 'images/product', $img);
                $product->image = $img;
            }
            
            $product->save();

            // Sync size/variation rows: simplest reliable approach for a
            // repeatable admin form is to replace all existing rows with
            // whatever was submitted this time (empty-label rows are
            // skipped). If the field wasn't submitted at all, leave
            // existing variations untouched (defensive - avoids wiping
            // data on a malformed/partial request).
            if ($request->has('variant')) {
                \App\Models\ProductVariation::where('product_id', $product->id)->delete();
                foreach ($request->variant as $i => $variantLabel) {
                    if (trim((string) $variantLabel) === '') {
                        continue;
                    }
                    \App\Models\ProductVariation::create([
                        'product_id' => $product->id,
                        'variant' => $variantLabel,
                        'price' => $request->variant_price[$i] ?? $product->price,
                        'qty' => $request->variant_qty[$i] ?? null,
                    ]);
                }
            }
            
            // check if any NEW gallery images were uploaded - only then touch the gallery.
            // (this guarantees editing a product never wipes existing gallery images
            // unless the admin actually selects new files to replace them)
            if ($request->hasFile('gallery')) {
                foreach ($product->product_image as $oldImage) {
                    if (File::exists(public_path('images/product/'.$oldImage->image))) {
                        File::delete(public_path('images/product/'.$oldImage->image));
                    }
                    $oldImage->delete();
                }
                $i = 0;
                foreach ($request->file('gallery') as $gallery){
                    $img = time() . '_' . $i . '_' . uniqid() . '.' . $gallery->getClientOriginalExtension();
                    ImageUpload::save($gallery, 'images/product', $img);

                    $galleryImage = new ProductImage;
                    $galleryImage->image = $img;
                    $galleryImage->product_id = $product->id;
                    $galleryImage->save();
                    $i = $i + 1;
                }
            }

            Alert::toast('Product Updated!', 'success');
            return redirect()->route('product.index');
        }
        else{
            Alert::toast('Something went wrong!', 'error');
            return redirect()->route('product.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            // Deleting the gallery files
            foreach ($product->product_image as $image) {
                if (File::exists(public_path('images/product/'.$image->image))){
                    File::delete(public_path('images/product/'.$image->image));
                }
                $image->delete();
            }
            // Deleting the product image
            if ($product->image && File::exists(public_path('images/product/'.$product->image))){
                File::delete(public_path('images/product/'.$product->image));
            }
            // Deleting the variations 
            foreach ($product->variation as $variation) {
                $variation->delete();
            }

            $product->delete();
            Alert::toast('Product has been deleted !', 'success');
            return back();
        }
        else {
            session()->flash('error','Something went wrong !');
            return back();
        }
    }
}