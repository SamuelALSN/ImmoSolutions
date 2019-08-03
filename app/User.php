<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
 use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements  MustVerifyEmail
{
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name', 'email',
        'password','activated','country_id',
        'signup_ip_address',
//        'signup_sm_ip_address',
//        'admin_ip_address',
//        'updated_ip_address',
         'deleted_ip_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activated'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected  $dates=[
        'deleted_at'
    ];


    /**
     *  Build  User PRelationaships
     */
}