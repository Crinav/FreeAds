<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['id','img'];

    public function article() {
        $this->belongsTo(Article::class);
    }

}
