<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Alert;
use Image;
use Carbon\Carbon;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $galleries = Gallery::orderBy('id', 'DESC')->get();
            return view('admin.gallery.index', compact('galleries'));
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
        if ($request->hasFile('image')){
            $i = 0;
            foreach ($request->file('image') as $image){
                $img = time() . '_' . $i . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/gallery/'. $img);
                Image::make($image)->resize(1000, 800)->save($location);

                $gallery = new Gallery;
                $gallery->image = $img;
                $gallery->save();
                $i = $i + 1;
            }
            Alert::toast('Images has been uploaded', 'success');
        } else {
            Alert::toast('Please select at least one image', 'error');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->type == 1) {
            $gallery = Gallery::find($id);
            if (!is_null($gallery)) {
                if (File::exists('images/gallery/'.$gallery->image)){
                    File::delete('images/gallery/'.$gallery->image);
                }
                $gallery->delete();
                Alert::toast('Gallery image has been deleted', 'success');
                return redirect()->route('gallery.index');
            }
            else {
                Alert::toast('Something went wrong!', 'error');
                return back();
            }
        }
        else {
            Alert::toast('Something went wrong!', 'error');
            return back();
        }
    }

    /**
     * banner one 
    */
    public function bannerOne(Request $request){

        if (auth()->user()->type == 1) {          
            return view('admin.gallery.banner');
        }

    }

    /**
     * store banner
    */
    public function bannerOneStore(Request $request){

        if (auth()->user()->type == 1) {
        
        $request->validate(['image' => 'required', 'link' => 'url|nullable']);


        $data = [];
        $data['title'] = 'Banner Top';
        $data['link'] =  $request->link;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time(). '.'. $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/banner');
            $image->move($destinationPath, $name);

            $data['image'] = '/images/banner/' . $name;
        }

        // Row may not exist yet (fresh install) - create it if missing instead of
        // silently doing nothing, which is what update() alone would do.
        if (DB::table('home_page_four_banners')->where('id', 1)->exists()) {
            DB::table('home_page_four_banners')->where('id', 1)->update($data);
        } else {
            $data['id'] = 1;
            DB::table('home_page_four_banners')->insert($data);
        }

        Alert::toast('Banner has been added successfully', 'success');
        return back();
        }else{
            Alert::toast('Access Denied!', 'error');
            return back();
        }

    }


     /**
     * banner two 
    */
    public function bannerTwo(Request $request){

        if (auth()->user()->type == 1) {          
            return view('admin.gallery.banner_bottom');
        }

    }

    /**
     * store banner
    */
    public function bannerTwoStore(Request $request){

        if (auth()->user()->type == 1) {
        
        $request->validate(['image' => 'required']);


        $data = [];
        $data['title'] = 'Banner Bottom';
        $data['link'] =  $request->link;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time(). '.'. $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/banner');
            $image->move($destinationPath, $name);

            $data['image'] = '/images/banner/' . $name;
        }

        if (DB::table('home_page_four_banners')->where('id', 2)->exists()) {
            DB::table('home_page_four_banners')->where('id', 2)->update($data);
        } else {
            $data['id'] = 2;
            DB::table('home_page_four_banners')->insert($data);
        }

        Alert::toast('Banner has been added successfully', 'success');
        return back();
    }else{
        Alert::toast('Access Denied!', 'error');
        return back();
    }

    }


  /**
   * deal of the day
  */
  public function dealOfTheDay(Request $request){
    
    if (auth()->user()->type == 1) {
        // This page used to blindly update whichever product was created most
        // recently (Product::latest()->first()), with no way to pick which
        // product - a confusing, duplicate mechanism. The correct place to
        // set the Deal Of The Day (with a product picker) is each product's
        // own Edit page, which already has a "Deal Of The Day" checkbox and
        // date field. Redirect there instead.
        Alert::toast('To set the Deal Of The Day, open the specific product you want and use the "Deal Of The Day" checkbox + date field on its Edit page.', 'info');
        return redirect()->route('product.index');
    }
  }

    /**
     * deal of the day
     */
    public function dealOfTheDayStore(Request $request){
        // Deprecated - see dealOfTheDay() above.
        return redirect()->route('product.index');
    }

}