<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['email', 'name', 'name2', 'company', 'phone', 'Address1', 'city', 'postcode', 'product', 'description', 'price', 'quantity', 'date', 'time'];

}
