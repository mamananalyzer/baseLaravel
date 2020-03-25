<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use SoftDeletes;

    protected $fillable = ['brand', 'type', 'picture', 'description', 'listdescription', 'datasheet', 'usermanual'];

    public function getPic()
    {
        if(!$this->picture){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->picture);
    }
}
