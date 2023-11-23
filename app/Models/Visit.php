<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Class Encounter
 *
 * @version September 3, 2021, 7:09 am UTC
 *
 * @property string $doctor
 * @property string $patient
 * @property string $description
 * @property int $id
 * @property int $doctor_id
 * @property int $patient_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Database\Factories\EncounterFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereEncounterDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUpdatedAt($value)
 * @mixin Model
 *
 * @property string $visit_date
 * @property-read Doctor $visitDoctor
 * @property-read \App\Models\Patient $visitPatient
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereVisitDate($value)
 */
class Visit extends Model
{
    use HasFactory;

    public $table = 'visits';

    public $fillable = [
        'visit_date',
        'doctor_id',
        'patient_id',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'visit_date' => 'string',
        'doctor' => 'integer',
        'patient' => 'integer',
        'description' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'visit_date' => 'required',
        'doctor_id' => 'required',
        'patient_id' => 'required',
    ];

    /**
     * @return BelongsTo
     */
    public function visitDoctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    /**
     * @return BelongsTo
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }


    /**
     * @return BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    /**
     * @return BelongsTo
     */
    public function visitPatient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function problems()
    {
        return $this->hasMany(VisitProblem::class, 'visit_id');
    }

    /**
     * @return HasMany
     */
    public function observations()
    {
        return $this->hasMany(VisitObservation::class, 'visit_id');
    }

    /**
     * @return HasMany
     */
    public function notes()
    {
        return $this->hasMany(VisitNote::class, 'visit_id');
    }

    /**
     * @return HasMany
     */
    public function prescriptions()
    {
        return $this->hasMany(VisitPrescription::class, 'visit_id');
    }
}
