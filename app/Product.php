<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name','code','image','price','description',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function getCategory(){
    	return Category::find($this->id);
    }

    public function getPriceForCount(){
    	if(!is_null($this->pivot)){
    		return $this->pivot->count * $this->price;
    	}
    	return $this->price;
    }


}
