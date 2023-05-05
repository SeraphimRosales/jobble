<?php

class JobSeekerProfile extends Model
{
    protected $fillable = [
        'address',
        'contact_number',
        'profile_picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
