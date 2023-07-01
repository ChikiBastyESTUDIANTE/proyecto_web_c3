<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    public function user():BelongsTo{
        return $this->belongsTo(Cuenta::class,'cuenta_user','user');
    }
}
