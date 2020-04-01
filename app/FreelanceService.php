<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Freelancer;


class FreelanceService extends Model
{
    protected $fillable=['service_num','city','location','service_description','accept','work_alone','accept_team'];
    protected $casts = ['team_memeber' => 'array'];
    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
             return $q->where('service_num','like',"%$search%");
        });
    }

    public function freelancerName($email)
    {
        $user=User::where('email',$email)->first();
        return $user;
    }

    public function freelancerMemeber($email)
    {
        $freelancer=Freelancer::where('email',$email)->first();
        return $freelancer;
    }



    

    

}
