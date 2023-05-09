<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Santri extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    // protected $table = 'santris';
    public function orang()
    {
        return $this->hasOne(Orang::class);
    }
    public function wali()
    {
        return $this->hasOne(Wali::class);
    }
}
