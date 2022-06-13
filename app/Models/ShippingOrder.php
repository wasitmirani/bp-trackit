<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class ShippingOrder extends Model
{
  
    protected $connection = 'mongodb';
    protected $collection = 'client_order_news';
}
