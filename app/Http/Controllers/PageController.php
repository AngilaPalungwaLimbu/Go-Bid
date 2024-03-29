<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // public function __construct()
    // {
    //     $seller= Seller::get();
    //     View::share('seller',$seller);
    // }

    public function becomeSeller()
    {

        return view('frontend.pages.seller');
    }


    public function home()
    {
        $products = Product::all();
        return view('frontend.pages.home', compact('products'));
    }
    public function account()
    {
        // $account=Auth::user();
        return view('frontend.pages.myAccount');
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
        return view('frontend.pages.productDetail', compact('product', 'bids', 'currentDate','winner'));
    }

    public function search()
    {
        $search=$_GET['query'];
        $products = Product::where('name','like','%'.$search.'%')->get();
        return view('frontend.pages.search', compact('products'));
    }

}
