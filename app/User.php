<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Freelancer;
use App\Client;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
       
    public function getclientServiceCount($email)
    {
        $client=Client::where('email',$email)->withCount('services')->first();
        return $client->services_count;
    }
    public function getFreelancer($identifcation_no)
    {
        $freelancer=Freelancer::where('identifcation_no',$identifcation_no)->first();
        return $freelancer;
    }

    public function getClient($email)
    {
        $client=Client::where('email',$email)->first();
        return $client;
    }
    

}
