<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Auth;
use Image;
Use File;
use Alert;
use App\Models\Query;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $admins = User::where('type', 1)->orderBy('id', 'DESC')->get();
            return view('admin.admin.index', compact('admins'));
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
            return view('admin.admin.create');
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'phone' => 'required|max:255|unique:users',
            'image' => 'nullable|image',
        ]);
        $admin = new User;
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        //$admin->description = $request->description;
        $admin->city = $request->city;
        //$admin->country = $request->country;
        $admin->password = Hash::make($request->password);
        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/admin/'. $img);
            Image::make($image)->save($location);
            $admin->image = $img;
        }
        $admin->type = 1;
        $admin->is_active = 1;
        $admin->save();
        //$admin->sendEmailVerificationNotification();

        Alert::toast('One admin added !', 'success');
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
            $admin = User::find($id);
            if (!is_null($admin)) {
                return view('admin.admin.edit', compact('admin'));
            }
            else{
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,'.$admin->id,
            'phone' => 'required|max:255|unique:users,phone,'.$admin->id,
            'image' => 'nullable|image',
        ]);
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        // $admin->description = $request->description;
        $admin->city = $request->city;
        // $admin->country = $request->country;
        
        // image save
        if ($request->image){
            if (File::exists('images/admin/'.$admin->image)){
                File::delete('images/admin/'.$admin->image);
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/admin/'. $img);
            Image::make($image)->save($location);
            $admin->image = $img;
        }

        

        $admin->save();

        Alert::toast('Admin Updated !', 'success');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::find($id);
        if (!is_null($admin)) {
            if (File::exists('images/admin/'.$admin->image)){
                File::delete('images/admin/'.$admin->image);
            }
            $admin->delete();
            Alert::toast('Admin has been deleted !', 'success');
            return redirect()->route('admin.index');
        }
        else {
            session()->flash('error','Something went wrong !');
            return redirect()->route('admin.index');
        }
    }

    public function customer_index()
    {
        if (Auth::user()->type == 1) {
            $customers = User::where('type', 2)->orderBy('id', 'DESC')->get();
            return view('admin.customer.index', compact('customers'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    public function contact_index()
    {
        if (Auth::user()->type == 1) {
            $contacts = Query::orderBy('id', 'DESC')->get();
            return view('admin.customer.contact_index', compact('contacts'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    public function customer_destroy($id)
    {
        $customer = User::find($id);
        if (!is_null($customer)) {
            if (File::exists('images/customer/'.$customer->image)){
                File::delete('images/customer/'.$customer->image);
            }
            $customer->delete();
            Alert::toast('Customer has been deleted !', 'success');
            return redirect()->route('customer.index');
        }
        else {
            session()->flash('error','Something went wrong !');
            return redirect()->route('customer.index');
        }
    }

    public function contact_destroy($id)
    {
        $customer = Query::find($id);
        if ($customer) {
            $customer->delete();
            Alert::toast('Delete has been successfull !', 'success');
            return back();
        }
        else {
            session()->flash('error','Something went wrong !');
            return redirect()->route('contact.index');
        }
    }
}
