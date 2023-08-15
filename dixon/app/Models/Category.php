<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
    ];

    public function category(){
        return $this->hasMany('App\Models\Product');
    }

    public function products(){
        return $this->hasMany(Product::class,'categoriesID','id');
    }
}
