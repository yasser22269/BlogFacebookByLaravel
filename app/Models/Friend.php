<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class,"friends","user_id","friend_id");
    }
}
