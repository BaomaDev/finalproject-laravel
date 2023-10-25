<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline',
        'date',
        'departure',
        'arrival'
        
    ];

    public function tour(): HasMany
    {
        return $this->hasMany(Tour::class);
    }
}
