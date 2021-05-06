<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateInterval;

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
        return $this->belongsTo(test_centre::class, 'centre_office_id', 'id');
    }

    public function TestDate()
    {
        $oldDate = $this->test_date;
        $newDate = new DateTime($oldDate);
        $fomattedDate = $newDate->format('d-m-Y');
        return $fomattedDate;
    }

    public function Expired(){
        $oldDate = $this->test_date;
        $newDate = new DateTime($oldDate);
        $newDate->add(new DateInterval('P14D')); // P1D means a period of 1 day
        $fomattedDate = $newDate->format('d-m-Y');
        return $fomattedDate;
    }

    public function testExpired()
    {
        if ($this->status=='Done') {
            return true;
        }elseif ($this->status=='Cancel'){
            return true;
        }else{
            $oldDate = $this->test_date;
            $newDate = new DateTime($oldDate);
            $newDate->add(new DateInterval('P14D')); // P1D means a period of 1 day

            if (new DateTime()>$newDate){
                return true;
            }
            return false;
        }
    }
}
