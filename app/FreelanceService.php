<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelanceService extends Model
{
    protected $fillable=['service_num','city','location','service_description','accept','work_alone','accept_team'];

    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
             return $q->where('service_num','like',"%$search%");
        });
    }

}
