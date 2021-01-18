<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	"name",'code',"description","image",
    ];

    public function products(){
    	return $this->belongsToMany(Product::class);
    }
}
