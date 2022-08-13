<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Bid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
}
