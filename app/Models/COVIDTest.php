<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COVIDTest extends Model
{
    use HasFactory;

    /**
     * The attributes to assign tabble name
     */
    protected $table = 'covidtest';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'centre_office_id',
        'test_kit_id',
        'patient_id',
        'test_id',
        'test_date',
        'result',
        'status',
    ];

    public function Patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function Kits()
    {
        return $this->belongsTo(test_kit::class, 'test_kit_id', 'id');
    }

    public function Office()
    {
        return $this->belongsTo(centre_office::class, 'centre_office_id', 'id');
    }
}
