<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SalesRecords;

class ShopItem extends Model
{
    protected $fillable=['name','price'];
    protected $table_name='shopitems';

    public function sales()
    {
    	return $this->hasMany('App\SalesRecords','shop_item_id','id');
    }
}
