<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable=['shop_item_id','quantity','description'];
    
    public function shopitem()
    {
    	return $this->hasOne('App\ShopItem','id','shop_item_id'); 
    }
}
