<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['phone_num','whats_num','email','termsandconditions','account_num','logo','projects_into','about_into'];
}
