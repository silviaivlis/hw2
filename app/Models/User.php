<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function reviews(){
        return $this->hasMany('App/Models/Review');
    }

    public function books(){
        return $this->belongsToMany('App/Models/Book');
    }
}

?>