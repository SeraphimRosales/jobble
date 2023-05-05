<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employer extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'company_name', 'company_website'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function isEmployer()
    {
        return true;
    }
    
    public function job_posts()
    {
        return $this->hasMany(JobPost::class);
    }
}

