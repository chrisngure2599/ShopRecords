<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShopItem;

class SalesRecords extends Model
{
    //
    protected $fillable=['shop_item_id','quantity','price'];

    public function shopitem()
    {
    	return $this->hasOne('App\ShopItem','id','shop_item_id'); 
    }
}
