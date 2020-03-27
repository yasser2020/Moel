<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['kind_of_service','service','client_id'];
    public function client()
    {
        return $this->belongsTo(Client::class,'clients');
    }
}
