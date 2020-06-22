<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id','phone', 'avatar', 'state'
    ];


    // Remove timestamp
    public $timestamps = false;

    /* DB relations */
    // InfoUser (one to one)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}