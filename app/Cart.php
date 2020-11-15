<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // protected $fillable = ['name', 'userid', 'email', 'company', 'phone', 'Address1', 'city', 'postcode', 'product', 'description', 'price', 'status', 'picture', 'quantity', 'date', 'time'];
    protected $fillable = ['name', 'email', 'company', 'phone', 'product', 'description', 'status', 'picture', 'quantity', 'date', 'time'];
    // protected $fillable = ['email', 'name', 'name2', 'company', 'phone', 'Address1', 'city', 'postcode', 'product', 'description', 'price', 'status', 'quantity', 'date', 'time'];

}
