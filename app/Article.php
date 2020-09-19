<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use Notifiable;

    protected $fillable = ['title','desc','price','id_member', 'categorie'];

    public function user() {
        $this->belongsTo(User::class);
    }

    // public function photo() {
    //     $this->hasOne(Photo::class);
    // }
}
