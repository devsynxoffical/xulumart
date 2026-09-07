<?php

namespace App\Http\Controllers;

use Svg\Tag\Rect;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    /**
     * faq view resources\views\admin\faq\index.blade.php
    */
    public function index(){
        return view('admin.faq.index');
    }

    
    /**
     * faq store
    */
    public function store(Request $request){
       
        $request->validate([
            'question' =>'required',
            'answer' =>'required'
        ]);

        $faq = new Faq();
        $faq->title = $request->question;
        $faq->body = $request->answer;
        $faq->save();

        Alert::toast('Store Successful', 'success');
        return back();        
    }

     /**
     * faq update
    */
    public function destroy(Request $request, $id){

        $destroy = Faq::find($id);
        if($destroy){
            $destroy->delete();
            Alert::toast('Delete Successful', 'success');
            return back();
        }else{
            Alert::toast('Could Not Delete', 'error');
            return back(); 
        }      
    }

    /**
     * destroy 
    */
    public function update(Request $request, $id){
       
        $request->validate([
            'question' =>'required',
            'answer' =>'required'
        ]);

        $faq = Faq::find($id);
        $faq->title = $request->question;
        $faq->body = $request->answer;
        $faq->save();

        Alert::toast('Update Successful', 'success');
        return back();        
    }
}
