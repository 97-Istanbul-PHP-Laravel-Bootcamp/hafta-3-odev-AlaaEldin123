<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'category_id',
        'user_id',
        'unicode',
        'slug',
        'title',
        'description',
        'order',
        'status',
        'prc',
        'cid',

    ];


    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function user(){

        return $this->belongsTo(User::class,'user_id','id');
    }

}
