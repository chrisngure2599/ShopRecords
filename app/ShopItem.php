<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    protected $fillable=['name','price'];
    protected $table_name='shopitems';
}
