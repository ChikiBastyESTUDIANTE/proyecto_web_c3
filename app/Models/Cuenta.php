<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cuenta extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;



    public function perfil():BelongsTo{
        return $this->belongTo(Perfil::class);
    }

    public function imagenes():HasMany{
        return $this->hasMany(Imagen::class,'cuenta_user','user');
    }
}