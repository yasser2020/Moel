<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Servcie;

class Client extends Model
{
   use SoftDeletes;
    protected $fillable=['name','sex','nationality','city','address','phone_num','whats_num','email',
    'how_know_us','subscription','block'];
    

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function getclientServiceCount($email)
    {
        $client=$this::where('email',$email)->withCount('services')->first();
        return $client->services_count;
    }
    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
             return $q->where('name','like',"%$search%");
        });
    }
    public function getClientState()
    {
       if($this->clients_record<10)
       return 'عميل عادى';
       else if($this->clients_record>10 && $this->clients_record<=20)
       return 'عميل مميز';
       else
       return 'عميل راقى';
    }
    
}
