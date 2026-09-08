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

        while (strlen($code) < $codeLength) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code . $character;
        }

        if (Product::where('code', $code)->exists()) {
            return $this->generateUniqueCode();
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'sub_category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'hover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'deal_of_day_count' => 'nullable|date',
        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->discount_price = $request->filled('discount_price') ? $request->discount_price : null;
        
        $product->features = $request->features;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->tags = $request->tags;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->type = 'single';
        $product->is_active = $request->filled('status') ? (int)$request->status : 1;
        
        if (!empty($request->code)) {
            $product->code = $request->code;
        } else {
            $product->code = $this->generateUniqueCode();
        }

        $product->is_new = $request->has('is_new') ? 1 : 0;
        $product->is_sale = $request->has('is_sale') ? 1 : 0;
        $product->is_special = $request->has('is_special') ? 1 : 0;
        $product->flash_sale = $request->has('flash_sale') ? 1 : 0;

        if ($request->has('deal_of_day')) {
            Product::where('deal_of_day', 1)->update(['deal_of_day' => 0]);
            $product->deal_of_day = 1;
        } else {
            $product->deal_of_day = 0;
        }

        if ($request->filled('deal_of_day_count')) {
            $product->deal_of_day_count = $request->deal_of_day_count;
        } else {
            $product->deal_of_day_count = null;
        }

        // image save
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $img);
            $product->image = $img;
        }

        if ($request->hasFile('hover_image')) {
            $image = $request->file('hover_image');
            $hoverimg = 'hover_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $hoverimg);
            $product->hover_image = $hoverimg;
        }
        
        $product->save();

        // Save variations
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
        
        // gallery
        if ($request->hasFile('gallery')) {
            $i = 0;
            foreach ($request->file('gallery') as $gallery) {
                $img = time() . '_' . $i . '_' . uniqid() . '.' . $gallery->getClientOriginalExtension();
                ImageUpload::save($gallery, 'images/product', $img);

                $galleryImage = new ProductImage;
                $galleryImage->image = $img;
                $galleryImage->product_id = $product->id;
                $galleryImage->save();
                $i++;
            }
        }

        Alert::toast('Product Added Successfully!', 'success');
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
                $sub_categories = $product->category_id ? Category::where('parent_id', $product->category_id)->get() : collect();
                $brands = Brand::orderBy('id', 'DESC')->get();
                return view('admin.product.edit', compact('product', 'categories', 'sub_categories', 'brands'));
            } else {
                Alert::toast('Product Not Found!', 'error');
                return redirect()->route('product.index');
            }
        } else {
            Alert::toast('Access Denied!', 'error');
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
            'brand_id' => 'nullable|exists:brands,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'hover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'deal_of_day_count' => 'nullable|date',
        ]);

        $product = Product::find($id);
        if (!$product) {
            Alert::toast('Product not found!', 'error');
            return redirect()->route('product.index');
        }

        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->discount_price = $request->filled('discount_price') ? $request->discount_price : null;
        
        $product->features = $request->features;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->tags = $request->tags;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->type = 'single';
        if ($request->filled('status')) {
            $product->is_active = (int) $request->status;
        }

        if (!empty($request->code)) {
            $product->code = $request->code;
        } elseif (empty($product->code)) {
            $product->code = $this->generateUniqueCode();
        }

        $product->is_new = $request->has('is_new') ? 1 : 0;
        $product->is_sale = $request->has('is_sale') ? 1 : 0;
        $product->is_special = $request->has('is_special') ? 1 : 0;
        $product->flash_sale = $request->has('flash_sale') ? 1 : 0;

        if ($request->has('deal_of_day')) {
            Product::where('id', '!=', $product->id)->where('deal_of_day', 1)->update(['deal_of_day' => 0]);
            $product->deal_of_day = 1;
        } else {
            $product->deal_of_day = 0;
        }

        if ($request->filled('deal_of_day_count')) {
            $product->deal_of_day_count = $request->deal_of_day_count;
        } else {
            $product->deal_of_day_count = null;
        }

        // image save
        if ($request->hasFile('image')) {
            if ($product->image && !str_starts_with($product->image, 'http') && File::exists(public_path('images/product/' . $product->image))) {
                File::delete(public_path('images/product/' . $product->image));
            }
            $image = $request->file('image');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $img);
            $product->image = $img;
        }

        // hover_image save
        if ($request->hasFile('hover_image')) {
            if ($product->hover_image && !str_starts_with($product->hover_image, 'http') && File::exists(public_path('images/product/' . $product->hover_image))) {
                File::delete(public_path('images/product/' . $product->hover_image));
            }
            $image = $request->file('hover_image');
            $hoverimg = 'hover_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/product', $hoverimg);
            $product->hover_image = $hoverimg;
        }
        
        $product->save();

        // Sync size/variation rows
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
        
        // Gallery
        if ($request->hasFile('gallery')) {
            foreach ($product->product_image as $oldImage) {
                if ($oldImage->image && !str_starts_with($oldImage->image, 'http') && File::exists(public_path('images/product/' . $oldImage->image))) {
                    File::delete(public_path('images/product/' . $oldImage->image));
                }
                $oldImage->delete();
            }
            $i = 0;
            foreach ($request->file('gallery') as $gallery) {
                $img = time() . '_' . $i . '_' . uniqid() . '.' . $gallery->getClientOriginalExtension();
                ImageUpload::save($gallery, 'images/product', $img);

                $galleryImage = new ProductImage;
                $galleryImage->image = $img;
                $galleryImage->product_id = $product->id;
                $galleryImage->save();
                $i++;
            }
        }

        Alert::toast('Product Updated Successfully!', 'success');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            // Deleting the gallery files
            foreach ($product->product_image as $image) {
                if ($image->image && !str_starts_with($image->image, 'http') && File::exists(public_path('images/product/' . $image->image))) {
                    File::delete(public_path('images/product/' . $image->image));
                }
                $image->delete();
            }
            // Deleting the product image
            if ($product->image && !str_starts_with($product->image, 'http') && File::exists(public_path('images/product/' . $product->image))) {
                File::delete(public_path('images/product/' . $product->image));
            }
            // Deleting the hover image
            if ($product->hover_image && !str_starts_with($product->hover_image, 'http') && File::exists(public_path('images/product/' . $product->hover_image))) {
                File::delete(public_path('images/product/' . $product->hover_image));
            }
            // Deleting variations
            foreach ($product->variation as $variation) {
                $variation->delete();
            }

            $product->delete();
            Alert::toast('Product has been deleted!', 'success');
            return back();
        } else {
            Alert::toast('Product not found!', 'error');
            return back();
        }
    }
}