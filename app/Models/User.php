<?php

namespace App\Models;

use App\Notifications\RedefinirSenhaNotification;
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
        'email',
        'password',
    ];

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

    // intercepitando o fluxo padrão 
    public function sendPasswordResetNotification($token) // Esse metódo já existe e está sendo herdado de Authenticatable o qual será subistituido por esse 
    {
        $this->notify(new RedefinirSenhaNotification($token, $this->email, $this->name));
    }
    
}
