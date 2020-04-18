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
             return $q->where('service_num','like',"%$search%")
                     ->orWhere('location','like',"%$search%")
                     ->orWhere('city','like',"%$search%");
        });
    }

    public function freelancerName($email)
    {
        $user=User::where('email',$email)->first();
        return $user;
    }

    public function freelancerMemeber($email)
    {
        $freelancer=Freelancer::where('identifcation_no',$email)->first();
        return $freelancer;
    }
    public function getTeamMemeber($team_member)
    {
        $members=[];
        foreach ($team_member as $index => $email_member) {
            
            array_push($members,$this->getMember($email_member));
        }

        return $members;
    }

    public function getMember($email)
    {
        $member= Freelancer::where('identifcation_no',$email)->first();
        return $member->name;
    }
   



    

    

}
