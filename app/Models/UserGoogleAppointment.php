<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGoogleAppointment extends Model
{
    use HasFactory;

    protected $table = 'user_google_appointments';

    public $fillable = [
        'user_id',
        'appointment_id',
        'google_calendar_id',
        'google_event_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'appointment_id' => 'string',
        'google_calendar_id' => 'string',
        'google_event_id' => 'string',
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
