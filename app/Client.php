<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servcie;

class Client extends Model
{
    protected $fillable=['name','sex','nationality','city','address','phone_num','whats_num','email',
    'how_know_us','subscription'];
    

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
             return $q->where('name','like',"%$search%");
        });
    }
    
}
