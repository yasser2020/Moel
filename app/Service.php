<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Service extends Model
{
    protected $fillable=['kind_of_service','service','client_id'];
    public function client()
    {
        return $this->belongsTo(Client::class,'clients');
    }
     public function getClientName($client_id)
     {
         $client=Client::whereId($client_id)->first();
         return $client->name;
     }
}
