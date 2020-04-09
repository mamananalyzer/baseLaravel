<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name', 'email', 'company', 'phone',
    'product', 'description', 'quantity'];

}
