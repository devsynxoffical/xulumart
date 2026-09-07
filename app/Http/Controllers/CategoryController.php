<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
use Alert;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $categories = Category::all();
            return view('admin.category.index', compact('categories'));
        }
        else {
            session()->flash('error','Access Denied !');
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
        if (Auth::user()->type == 1) {
            $categories = Category::where('parent_id', 0)->get();
            return view('admin.category.create', compact('categories'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->type != 1) {
            session()->flash('error','Access Denied !');
            return back();
        }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);
        //dd($request->all());
        $category = new Category;
        $category->title = $request->title;
        if($request->position != NULL){
            $category->position = $request->position;
        }
        if ($request->has('parent_id')) {
            $category->parent_id = $request->parent_id;
        }
        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/category', $img);
            $category->image = $img;
        }

        // banner save
        if ($request->banner){
            $image = $request->file('banner');
            $img = 'banner_'.time() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/category', $img);
            $category->banner = $img;
        }
        
        
        $category->meta_title = $request->meta_title;
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;

        $category->save();
        Alert::toast('One category added !', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->type == 1) {
            $category = Category::find($id);
            if (!is_null($category)) {
                $categories = Category::where('parent_id', 0)->get();
                return view('admin.category.edit', compact('category', 'categories'));
            }
            else {
                session()->flash('error','Something went wrong !');
                return back();
            }
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->type != 1) {
            session()->flash('error','Access Denied !');
            return back();
        }

        $this->validate($request, [
            'title' => 'required',
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'banner'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ],
            [
                'title.required' => 'Please provide a category name',
            ]);

        $category = Category::find($id);
        
        $category->title = $request->title;
        $category->position = $request->position;

        if ($request->has('parent_id')) {
            $category->parent_id = $request->parent_id;
        }

        // image save
        if ($request->hasFile('image')){
            if ($category->image && File::exists(public_path('images/category/'.$category->image))){
                File::delete(public_path('images/category/'.$category->image));
            }
            $image = $request->file('image');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/category', $img);
            $category->image = $img;
        }
        // banner save
        if ($request->hasFile('banner')){
            if ($category->banner && File::exists(public_path('images/category/'.$category->banner))){
                File::delete(public_path('images/category/'.$category->banner));
            }
            $image = $request->file('banner');
            $img = 'banner_'.time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/category', $img);
            $category->banner = $img;
        }
        if ($request->has('is_featured')) {
            $category->is_featured = 1;
        }
        else{
            $category->is_featured = 0;
        }
        
        $category->meta_title = $request->meta_title;
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;

        $category->save();
        Alert::toast('Category has been updated !', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->type != 1) {
            session()->flash('error','Access Denied !');
            return back();
        }

        $category = Category::find($id);
        if (!is_null($category)) {

            if ($category->child()->count() > 0) {
                session()->flash('error','This category has sub-categories. Please delete or reassign them first.');
                return back();
            }

            if ($category->product()->count() > 0) {
                session()->flash('error','This category still has products assigned to it. Please move or delete those products first.');
                return back();
            }

            if ($category->image && File::exists(public_path('images/category/'.$category->image))){
                File::delete(public_path('images/category/'.$category->image));
            }
            if ($category->banner && File::exists(public_path('images/category/'.$category->banner))){
                File::delete(public_path('images/category/'.$category->banner));
            }
            $category->delete();
            Alert::toast('Category has been deleted !', 'success');
            return back();
        }
        else {
            session()->flash('error','Something went wrong !');
            return back();
        }
    }
}