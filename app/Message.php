<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['id_sender','id_receiver','content'];

    public function user() {
        $this->hasMany(User::class);
    }
}
