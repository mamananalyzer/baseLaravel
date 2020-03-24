<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    protected $table = 'products';

    public function getPic()
    {

        if(!$this->code){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->code);
    }
}
