<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggalBerangkat','tanggalPulang','tour_id',
    ];

    public function tour():BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
    public function booking():BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

}
