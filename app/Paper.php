<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $guarded = [];

    public function document(){
        return $this->belongsTo(Document::class);
    }
}
