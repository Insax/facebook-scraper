<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookPosts extends Model
{
    public function comments()
    {
        return $this->hasMany('App\FacebookComments', 'internal_post_id', 'id');
    }
}
