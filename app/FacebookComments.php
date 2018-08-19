<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookComments extends Model
{
    public function post()
    {
        return $this->belongsTo('App\FacebookPosts', 'id', 'internal_post_id');
    }
}
