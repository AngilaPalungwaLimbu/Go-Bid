<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BidController extends Controller
{
    public function createBid(Request $request)
    {
        $bid=new Bid();
        $bid->price=$request->price;
        $bid->product_id = $request->product_id;
        $bid->user_id = Auth::user()->id;
        $bid->save();
        toast('Your have bidded succesfully!','success');
        return redirect()->back();

    }
}
