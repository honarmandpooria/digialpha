<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected
        $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function photos()
    {
        return $this->belongsTo(Photo::class);
    }



}
