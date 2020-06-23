<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'name',
        'comment'
    ];
      /* DB relations */
    // User (many to one)
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
