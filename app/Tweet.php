<?php

namespace App;

use App\LikeAble;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use LikeAble;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
