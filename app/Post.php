<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body', 'author_id'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
