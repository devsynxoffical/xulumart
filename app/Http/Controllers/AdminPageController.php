<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use Alert;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $pages = Page::all();
            return view('admin.page.index', compact('pages'));
        }
        else {
            Alert::toast('Something went wrong !', 'error');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->type == 1) {
            $page = Page::find($id);
            if (!is_null($page)) {
                return view('admin.page.edit', compact('page'));
            }
            else {
                Alert::toast('Something went wrong !', 'error');
                return back();
            }
        }
        else {
            session()->flash('error','Something went wrong !');
            return back();
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
        $page = Page::find($id);

        if (!is_null($page)) {
            $page->description = $request->description;
            $page->description1 = $request->description1;
            $page->description2 = $request->description2;
            //$page->description3 = $request->description3;

            // BUG FIX: these used to check $request->image / $request->new_arrival
            // etc (a truthy check that can behave inconsistently across PHP/Laravel
            // setups) and then delete the OLD file using a path relative to the
            // current working directory ('images/website/...') instead of
            // public_path(). On most servers the working directory when a request
            // runs isn't the public folder, so File::exists() would silently
            // return false, the old file was never cleaned up, and - because the
            // exists()/delete() calls never actually touched public/images/website
            // - it was easy for stale files or partial writes to make it look like
            // the upload hadn't taken effect. Now we use $request->hasFile() and
            // public_path() consistently, matching the working Slider controller.

            // image save
            if ($request->hasFile('image')) {
                if ($page->image && File::exists(public_path('images/website/' . $page->image))) {
                    File::delete(public_path('images/website/' . $page->image));
                }
                $image = $request->file('image');
                $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/website/' . $img);
                Image::make($image)->save($location);
                $page->image = $img;
            }

            // new_arrival save
            if ($request->hasFile('new_arrival')) {
                if ($page->new_arrival && File::exists(public_path('images/website/' . $page->new_arrival))) {
                    File::delete(public_path('images/website/' . $page->new_arrival));
                }
                $image = $request->file('new_arrival');
                $img = 'new_arrival_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/website/' . $img);
                Image::make($image)->save($location);
                $page->new_arrival = $img;
            }

            // product_banner save
            if ($request->hasFile('product_banner')) {
                if ($page->product_banner && File::exists(public_path('images/website/' . $page->product_banner))) {
                    File::delete(public_path('images/website/' . $page->product_banner));
                }
                $image = $request->file('product_banner');
                $img = 'product_banner_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/website/' . $img);
                Image::make($image)->save($location);
                $page->product_banner = $img;
            }

            // advertisement save
            if ($request->hasFile('advertisement')) {
                if ($page->advertisement && File::exists(public_path('images/website/' . $page->advertisement))) {
                    File::delete(public_path('images/website/' . $page->advertisement));
                }
                $image = $request->file('advertisement');
                $img = 'advertisement_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/website/' . $img);
                Image::make($image)->save($location);
                $page->advertisement = $img;
            }

            $page->meta_title = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->meta_keywords = $request->meta_keywords;

            $page->save();

            Alert::toast('Page Updated', 'success');
            return redirect()->route('page.index');
        }

        Alert::toast('Page not found', 'error');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}