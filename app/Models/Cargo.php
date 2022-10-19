<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_cargo');
    }

    
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
        return $this->belongsTo(Cargo::class, 'descricao');
    }
}
