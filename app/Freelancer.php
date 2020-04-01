<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use App\FreelanceService;
class Freelancer extends Model
{
    
    
    protected $fillable=['name','sex','identifcation_no','marital_status','date_of_birth','nationality',
    'city','address','phone_num','whats_num','email','qualification','graduation_year','grade','faculty',
    'experince','hopies','work_place','work_nature','work_time','cv','graduation_certificate','confirmation_career',
    'picture','privews_work','show_work','how_know_us','done'];
    protected $appends=['picture_path'];

    protected $casts = ['privews_work' => 'array'];
    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
             return $q->where('name','like',"%$search%");
        });
    }

    public function getPicturePathAttribute()
    {
        return Storage::url('images/'.$this->picture);
    }

    

    public function getImage($path)
    {
        return Storage::url('privews_works/'.$path);
    }

    public function getService($email)
    {
        $service=FreelanceService::where('freelancer_email',$email)->where('done',1)->first();
            return $service;
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
        $member= $this->where('email',$email)->first();
        return $member->name;
    }



}

