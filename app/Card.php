<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $fillable = ['name', 'place_of_birth','title','image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getName()
    {
        return $this->name;
    }
}