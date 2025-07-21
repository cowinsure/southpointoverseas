<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function area()
    {
        return $this->hasMany(Area::class);
    }
}
