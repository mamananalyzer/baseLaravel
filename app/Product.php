<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['brand', 'type', 'code', 'purchaseorder', 'serialnumber', 'spec', 'customer'];
}
