<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Wali extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
    public function orang()
    {
        return $this->belongsTo(Orang::class);
    }
}
