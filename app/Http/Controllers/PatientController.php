<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\centre_officer;
use App\Models\test_centre;
use App\Models\test_kit;
use App\Models\COVIDTest;

class PatientController extends Controller
{
    public function covidTest()
    {
        $this_id = Auth::user()->Patient->id;
        $tests = COVIDTest::where('patient_id', '=', $this_id)->get();
        return view('Patient/history', ['tests'=>$tests]);
    }

    public function profilePatient(){
        return view('Patient/profile');
    }
}
