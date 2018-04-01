<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'hash',
        'user_id',
        'pubpic',
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function likes()
    {
      return $this->hasMany('App\Like');
    }
}
