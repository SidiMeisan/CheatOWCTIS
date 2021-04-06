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

class TesterController extends Controller
{
    public function newTest()
    {
        $Patients = Patient::all();
        $Kits = test_kit::all();

        return view('Tester/new', ['Patients'=>$Patients,'Kits'=>$Kits]);
    }

    public function saveTest(Request $request)
    {
        $thisUser = Auth::user()->getID();
        $this_centre_officer = Auth::user()->officer->test_centre_id;

        $request->validate([
            'Patient' => 'required',
            'Kits' => 'required',
            'symptoms' => 'required',
            'Type' => 'required',
        ]);

        $updatePatient = Patient::find($request->Patient);
        $updatePatient->symptoms = $request->symptoms;
        $updatePatient->type = $request->Type;
        $updatePatient->save();

        $newCOVIDTest = new COVIDTest;
        $newCOVIDTest->centre_office_id = $this_centre_officer;
        $newCOVIDTest->test_kit_id = $request->Kits;
        $newCOVIDTest->patient_id = $request->Patient;
        $newCOVIDTest->test_date = date("Y-m-d");
        $newCOVIDTest->result = "-";
        $newCOVIDTest->status = "Checking";
        $newCOVIDTest->save();
        
        return redirect('Tester/home');
    }

    public function newResult($id)
    {
        $thisCOVIDTest = COVIDTest::find($id);
        return view('Tester/result',['thisCOVIDTest'=>$thisCOVIDTest]);
    }

    public function saveResult(Request $request)
    {
        $thisUser = Auth::user()->getID();
        $this_centre_officer = Auth::user()->officer->test_centre_id;

        $request->validate([
            'result' => 'required',
            'status' => 'required',
        ]);

        $updateThis = COVIDTest::find($request->id);
        $updateThis->result = $request->result;
        $updateThis->status = $request->status;
        $updateThis->save();
        return redirect('Tester/home');
    }
}
