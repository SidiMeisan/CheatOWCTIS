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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profileManager(){
        $thisUser = Auth::user()->getID();
        $officer = centre_officer::where('user_id', '=', $thisUser)
            ->first();
        return view('Manager/profile', ['officer'=>$officer]);
    }

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
        $newCentre->Name = $request->name;
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
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }else{
            $this_centre_officer = Auth::user()->officer->test_centre_id;
            $tests = COVIDTest::where('centre_office_id', '=', $this_centre_officer)->get();
            return view('Manager/COVIDTest', ['tests'=>$tests]);
        }
    }

    public function Testers()
    {
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }

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
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }

        return view('Manager/testerNew');
    }

    public function saveTesters(Request $request)
    {
        $thisUser = Auth::user()->getID();
        
        $request->validate([
            'name' => ['required', 'string', 'max:40'],
            'username' => ['required', 'string', 'max:30', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);

        $this_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->first();

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->gender = $request->gender;
        $newUser->address = $request->address;
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
        
        return redirect('Manager/testers')->with('success', 'newTester');
    }

    public function testkits()
    {
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }

        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $Kits = test_kit::where('test_centre_id','=',$this_centre_officer)
            ->where('available','>',0)
            ->get();
        return view('Manager/test', ['Kits'=>$Kits]);
    }

    public function newtestkits()
    {
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }

        return view('Manager/newTestkit');
    }

    public function savetestkits(Request $request)
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        
        $request->validate([
            'name' => ['required'],
            'Quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $newKit = new test_kit;
        $newKit->name = $request->name;
        $newKit->test_centre_id = $this_centre_officer;
        $newKit->available = $request->Quantity;
        $newKit->save();
        
        return redirect('Manager/testkits')->with('success', 'newKit');
    }


    public function editTestkits($id)
    {
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }

        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $Kits = test_kit::find($id);
        return view('Manager/editTest', ['Kits'=>$Kits]);
    }

    public function updattestkits(Request $request ,$id)
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $request->validate([
            'name' => ['required'],
            'Quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $Kits = test_kit::find($id);
        $Kits->name = $request->name;
        $Kits->available = $request->Quantity;
        $Kits->save();
        return redirect('Manager/testkits')->with('success', 'editKit');
    }

    public function deletekit($id)
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;

        $Kits = test_kit::find($id);
        $Kits->available = -1 ;
        $Kits->save();
        return redirect('Manager/testkits')->with('success', 'DeleteKit');
    }

    public function addTestkits()
    {
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return view('Manager/managerNew');
        }
        
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $Kits = test_kit::where('test_centre_id','=',$this_centre_officer)
            ->where('available','>',0)
            ->get();
        return view('Manager/addTest', ['Kits'=>$Kits]);
    }

    public function addStock(Request $request)
    {
        $this_centre_officer = Auth::user()->officer->test_centre_id;
        $request->validate([
            'Quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $Kits = test_kit::find($request->Kits);
        $Kits->available = $Kits->available + $request->Quantity;
        $Kits->save();
        return redirect('Manager/testkits')->with('success', 'StockKit');
    }
}
