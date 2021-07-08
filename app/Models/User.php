<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name', 'phoneNum','Reg_num','department',
        'DOB','gender',	'paid_status',	'avater_name',	'course','pay_through',	'card_pin',	'is_css_Student',
        'email',
        'password',
    ];
    /*	name	email	email_verified_at	password	remember_token	created_at	updated_at	
        last_name	phoneNum	Reg_num	department
    	DOB	paid_status	avater_name	course	pay_through	card_pin	is_css_Student
       */
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
