<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
        'password', 'remember_token', 'email'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsername() {
        return $this->username;
    }

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFirstNameOrUsername() {
        if (!$this->first_name) {
            return $this->username;
        }

        return $this->first_name;
    }

    public function scopeActive($query) {
        return $query->where('active', true);
    }

    public function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>=', $age);
    }

    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }
}
