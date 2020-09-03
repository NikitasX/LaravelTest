<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'short_url';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
