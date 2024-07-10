<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'priority',
        'completed',
        'user_id', // Agregar esto para permitir la asignación masiva de user_id
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
