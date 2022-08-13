<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{



    public function index(){
        $sellers= Seller::get();
        return view('admin.seller.index',compact('sellers'));
    }

    public function create(){
        return view('frontend.pages.seller');
    }

    public function store(Request $request)
    {
        $seller=new Seller();
        $seller->phone=$request->phone;
        $seller->address=$request->address;
        $seller->user_id= Auth::user()->id;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('image',$newName);
            $seller->image="image/$newName";
        }
        $seller->save();
        // toast('Your Post is saved!','success');
        return redirect('/');
    }
    public function show($id)
    {
        $seller=Seller::find($id);
        return view('admin.seller.show',compact('seller'));
    }
    public function updaterole( Request $request, $id)
    {
        $seller=Seller::find($id);
       $seller->user->role=$request->role;
       $seller->user->update();
       return redirect()->back();
    }
    public function delete($id)
    {
        $seller=Seller::find($id);
        // $seller->user()->detach();
        $seller->delete();
        return redirect('/seller');
    }
}
