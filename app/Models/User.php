<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser
{

    use HasFactory, Notifiable, SoftDeletes;

    
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    
    public function info(): HasOne
    {
        return $this->hasOne(UserInfo::class);
    }



    //Roles

    const ROLE_SUPER_ADMIN  = 'super-admin';
    const ROLE_ADMIN        = 'admin';
    const ROLE_MODERATOR    = 'moderator';
    const ROLE_USER         = 'user';
    
    const ROLES = [
        self::ROLE_SUPER_ADMIN  => 'super-admin',
        self::ROLE_ADMIN        => 'admin',
        self::ROLE_MODERATOR    => 'moderator',
        self::ROLE_USER         => 'user',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->SuperAdmin() || $this->Admin() || $this->Moderator();
    }

    public function SuperAdmin(){
        return $this->role === self::ROLE_SUPER_ADMIN;
    }
    public function Admin(){
        return $this->role === self::ROLE_ADMIN; 
    }
    public function Moderator(){
        return $this->role === self::ROLE_MODERATOR;
    }
}
