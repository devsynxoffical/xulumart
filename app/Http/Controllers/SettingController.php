<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Alert;
use Carbon\Carbon;
use App\Helpers\ImageUpload;
use App\Models\User;
use App\Models\Setting;
use App\Models\ChangeColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $setting = Setting::orderBy('id', 'DESC')->first();
            return view('admin.setting.index', compact('setting'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    public function affiliate_request()
    {
        $affiliates  = User::where('affiliate_applied', 1)->get();
        return view('admin.affiliate.index', compact('affiliates'));
    }

    public function affiliate_status($id, $status)
    {
        if (Auth::user()->type == 1) {
            $customer = User::find($id);
            if ($status == 'approve') {
                $customer->is_affiliate = 1;
                $customer->affiliate_applied = 0;
                $customer->save();
                Alert::toast('Application Approved');
                return back();
            }
            if ($status == 'reject') {
                $customer->affiliate_applied = 0;
                $customer->affiliate_rejection = $customer->affiliate_rejection + 1;
                $customer->save();
                Alert::toast('Application Rejected');
                return back();
            }
            else{
                return back();
            }
            dd($customer, $status);
        }
        else{
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    public function referral_link()
    {
        $link = route('index').'?referral='.Auth::id();
        return view('admin.setting.referral', compact('link'));
    }

    public function config()
    {
        $setting = Setting::find(1);
        return view('admin.setting.affiliate-config', compact('setting'));
    }

    public function reward_point()
    {
        $setting = Setting::find(1);
        return view('admin.setting.reward-point', compact('setting'));
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
     * home about section.
     */
    public function homeAbout()
    {
        // BUG FIX: this previously passed no data to the view at all, so the
        // edit form was always blank even after a successful save - making it
        // look like nothing had been saved. We now load the current row so
        // the form is pre-filled with what's actually in the database.
        $home_about = DB::table('home_abouts')->orderBy('id', 'desc')->first();
        return view('admin.setting.home_about', compact('home_about'));
    }

    /**
     * home about store.
     */
    public function homeAboutStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',
            'youtube_link' => 'nullable'
        ]);
        
        $array_about_store = [
            'title' => $request->title,
            'description' => $request->description,
            'youtube_link' => $request->youtube_link,
            'updated_at' => Carbon::now(),
        ];

        // BUG FIX: this used to always INSERT a brand new row on every save,
        // instead of updating the existing "Home About" content. Because the
        // frontend read the row with the highest id, that happened to still
        // "work" most of the time, but it silently filled the table with
        // duplicate rows and — on any server where a cache, replica lag, or a
        // different ordering kicked in — the edit would appear to do nothing.
        // updateOrInsert() keeps a single row and always reflects the latest save.
        $existing = DB::table('home_abouts')->orderBy('id', 'desc')->first();

        if ($existing) {
            $about_store = DB::table('home_abouts')->where('id', $existing->id)->update($array_about_store);
        } else {
            $array_about_store['created_at'] = Carbon::now();
            $about_store = DB::table('home_abouts')->insert($array_about_store);
        }

        if ($about_store !== false) {
            Alert::toast('Settings have been updated!', 'success');
            return back();
        } else {
            Alert::toast('There was an error updating the settings.', 'error');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->merge([
            'facebook' => ImageUpload::normalizeUrl($request->facebook),
            'instagram' => ImageUpload::normalizeUrl($request->instagram),
            'tiktok' => ImageUpload::normalizeUrl($request->tiktok),
            'twitter' => ImageUpload::normalizeUrl($request->twitter),
            'youtube' => ImageUpload::normalizeUrl($request->youtube),
            'linkedin' => ImageUpload::normalizeUrl($request->linkedin),
        ]);

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'logo'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'footer_logo'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'favicon'=> 'nullable|image|mimes:jpg,jpeg,png,ico,webp|max:2048',
            'address' => 'required',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
        ]);

        $setting = Setting::find($id);
        
        $setting->name = $request->name;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;

        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->youtube = $request->youtube;
        $setting->linkedin = $request->linkedin;
        $setting->tiktok = $request->tiktok;

        // logo save
        if ($request->hasFile('logo')){
            if ($setting->logo && File::exists(public_path('images/website/'.$setting->logo))){
                File::delete(public_path('images/website/'.$setting->logo));
            }
            $image = $request->file('logo');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/website/'), $img);
            $setting->logo = $img;
        }
        if ($request->hasFile('footer_logo')){
            if ($setting->footer_logo && File::exists(public_path('images/website/'.$setting->footer_logo))){
                File::delete(public_path('images/website/'.$setting->footer_logo));
            }
            $image = $request->file('footer_logo');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/website/'), $img);
            $setting->footer_logo = $img;
        }
        // favicon save
        if ($request->hasFile('favicon')){
            if ($setting->favicon && File::exists(public_path('images/website/'.$setting->favicon))){
                File::delete(public_path('images/website/'.$setting->favicon));
            }
            $image = $request->file('favicon');
            $img = 'favicon_'.time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/website', $img);
            $setting->favicon = $img;
        }

        //color set
        if($request->has('color') && $request->has('bg_color')){
            $setColor = ChangeColor::find(1);
            $setColor->color = $request->color;
            $setColor->bg_color = $request->bg_color;
            $setColor->save();
        }

        $setting->save();
        Alert::toast('Settings has been updated !', 'success');
        return back();
    }

    public function config_update(Request $request, $id)
    {
        $this->validate($request, [
            'affiliate_commision' => 'required|numeric',
        ]);

        $setting = Setting::find($id);
        
        $setting->affiliate_commision = $request->affiliate_commision;
        $setting->save();
        Alert::toast('Affiliate Configuration updated !', 'success');
        return back();
    }

    public function reward_point_update(Request $request, $id)
    {
        $this->validate($request, [
            'minimum_point' => 'required|numeric|min:1',
            'equivalent_point' => 'required|numeric|min:1',
        ]);

        $setting = Setting::find($id);
        
        $setting->minimum_point = $request->minimum_point;
        $setting->equivalent_point = $request->equivalent_point;
        $setting->save();
        Alert::toast('Reward point setting updated !', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}