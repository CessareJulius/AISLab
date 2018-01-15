<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //protected $table = 'persons';

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
