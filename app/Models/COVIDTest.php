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
}
