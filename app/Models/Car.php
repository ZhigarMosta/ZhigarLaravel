<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'make',
        'model',
        'user_id',
    ];

    public function  user() : BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }
}
