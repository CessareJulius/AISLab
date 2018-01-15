<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $fillable = [
        'dni', 'name', 'lastname', 'phone', 'direction', 'type',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
