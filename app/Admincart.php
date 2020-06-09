<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admincart extends Model
{
    protected $table = 'carts';

    public function getPic()
    {

        if(!$this->picture){
            return asset('images/buktibayar/default.jpg');
        }
        return asset('images/buktibayar/'.$this->picture);
    }
}
