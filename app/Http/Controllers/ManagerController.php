<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\centre_officer;
use App\Models\test_centre;
use App\Models\test_kit;
use App\Models\COVIDTest;

class ManagerController extends Controller
{
    //

    public function newManager(){
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }else{
            return redirect('Manager/home');
        }
    }

    public function saveManager(Request $request){
        
        $thisUser = Auth::user()->getID();

        $request->validate([
            'name' => ['required', 'unique:test_centre'],
        ]);

        $newCentre = new test_centre;
        $newCentre->name = $request->name;
        $newCentre->save();

        $newOfficer = new centre_officer;
        $newOfficer->test_centre_id = $newCentre->id;
        $newOfficer->user_id = $thisUser;
        $newOfficer->position = 1;
        $newOfficer->save();

        return redirect('Manager/home');
    }

    public function covidTest()
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $tests = COVIDTest::where('centre_office_id', '=', $this_centre_officer)->get();
        return view('Manager/COVIDTest', ['tests'=>$tests]);
    }

    public function Testers()
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $Testers = centre_officer::where('test_centre_id','=',$this_centre_officer)
            ->wherehas('Users',function($q){
                $q->where('as','=','Tester');
            })
            ->get();
        return view('Manager/tester', ['Testers'=>$Testers]);
    }

    public function newTesters()
    {
        return view('Manager/testerNew');
    }

    public function saveTesters(Request $request)
    {
        $thisUser = Auth::user()->getID();
        
        $request->validate([
            'name' => ['required', 'string', 'max:40'],
            'username' => ['required', 'string', 'max:30', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $this_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->first();

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->username = $request->username;
        $newUser->password = Hash::make($request->password);
        $newUser->save();

        $newOfficer = new centre_officer;
        $newOfficer->test_centre_id = $this_centre_officer->test_centre_id;
        $newOfficer->user_id = $newUser->id;
        $newOfficer->position = 2;
        $newOfficer->save();

        $updateUser = User::find($newUser->id);
        $updateUser->as = "Tester";
        $updateUser->save();
        
        return redirect('Manager/testers');
    }

    public function testkits()
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $Kits = test_kit::where('test_centre_id','=',$this_centre_officer)
            ->get();
        return view('Manager/test', ['Kits'=>$Kits]);
    }

    public function newtestkits()
    {
        return view('Manager/newTestkit');
    }

    public function savetestkits(Request $request)
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        
        $request->validate([
            'name' => 'required',
            'Quantity' => 'required',
        ]);

        $newKit = new test_kit;
        $newKit->name = $request->name;
        $newKit->test_centre_id = $this_centre_officer;
        $newKit->available = $request->Quantity;
        $newKit->save();
        
        return redirect('Manager/testkits');
    }
}
