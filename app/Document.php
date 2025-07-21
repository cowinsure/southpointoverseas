<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    public function papers(){
        return $this->hasMany(Paper::class);
    }
}
