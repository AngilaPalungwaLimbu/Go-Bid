<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create()
    {
        $categories=Category::all();
        $currentDate = Carbon::now()->addHours(5)->addMinute(45);
      return view('frontend.pages.productCreate',compact('categories','currentDate',));
    }

    public function show(){

        $product=Product::all();

    }

    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->startingPrice=$request->startingPrice;
        $product->endingTime=$request->endingTime;
        $product->seller_id=Auth::user()->seller->id;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('image',$newName);
            $product->image="image/$newName";
        }
        $product->save();
        return redirect('/');
    }
}
