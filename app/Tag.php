<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    



    //Db relationship

    //Post many to many
    public function posts()
    {
        return $this->belongsToMany('App\post');
    }
}
