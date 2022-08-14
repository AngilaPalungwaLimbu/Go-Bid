<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categories=Category::all();
        $currentDate = Carbon::now()->addHours(5)->addMinute(45);
      return view('frontend.pages.productCreate',compact('categories','currentDate',));
    }


    public function product($id)
    {
        $product = Product::find($id);
        $currentDate = Carbon::now()->addHours(5)->addMinute(45);
        $bids = Bid::select("*")
            ->where('product_id', $product->id)
            ->orderBy('price', 'desc')->get();
        $winner = Bid::select("*")
            ->where('product_id', $product->id)
            ->orderBy('price', 'desc')->first();
            // return $product->endingTime;
        return view('admin.product.productshow', compact('product', 'bids', 'currentDate','winner'));
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
    public function delete($id)
    {
        $product=Product::find($id);
        // $product->categories()->detach();
        // $product->seller()->detach();
        $product->delete();
        return redirect('/product');
    }
}
