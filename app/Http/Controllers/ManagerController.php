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
            'TestCentre_Name' => 'required'
        ]);

        $newCentre = new test_centre;
        $newCentre->name = $request->TestCentre_Name;
        $newCentre->save();

        $newOfficer = new centre_officer;
        $newOfficer->test_centre_id = $newCentre->id;
        $newOfficer->user_id = $thisUser;
        $newOfficer->position = 1;
        $newOfficer->save();

        return redirect('Manager/home');
    }

    public function Testers()
    {
        return view('Manager/tester');
    }

    public function newTesters()
    {
        return view('Manager/testerNew');
    }

    public function saveTesters(Request $request)
    {
        $thisUser = Auth::user()->getID();
        
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
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
        return view('Manager/test');
    }

    public function newtestkits()
    {
        return view('Manager/newTestkit');
    }

    public function savetestkits(Request $request)
    {
        $thisUser = Auth::user()->getID();

        $this_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->first();
        
        $request->validate([
            'name' => 'required',
            'Quantity' => 'Quantity',
        ]);

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->test_centre_id = $this_centre_officer;
        $newUser->available = $request->Quantity;
        $newUser->save();
        
        return redirect('Manager/testkits/');
    }
}
