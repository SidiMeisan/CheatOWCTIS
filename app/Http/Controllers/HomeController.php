<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\centre_officer;
use App\Models\test_centre;
use App\Models\COVIDTest;


class HomeController extends Controller
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

    public function logout() 
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $thisUser = Auth::user()->getAs();
        if($thisUser=="guest"){
            return redirect('pickLevel');
        }elseif($thisUser=="Patient"){
            return redirect('Patient');
        }elseif($thisUser=="Manager"){
            return redirect('Manager');
        }else{
            return redirect('Tester/home');
        }
    }

    public function formPick(){
        return view('pickLevel');
    }

    public function Pick(Request $request){
        $thisUser = Auth::user()->getID();
        $request->validate([
            'Pick' => 'required'
        ]);
        
        if ($request->Pick=="Patient") {
            $newPatient = new Patient;
            $newPatient->user_id = $thisUser;
            $newPatient->save();

            $updateUser = User::find($thisUser);
            $updateUser->as = $request->Pick;
            $updateUser->save();
            
            return redirect('/home');
        } else{
            $updateUser = User::find($thisUser);
            $updateUser->as = $request->Pick;
            $updateUser->save();
            return redirect('Manager/new');
        }
    }


    // manager section
    
    Public function Manager(){
        $thisUser = Auth::user()->getID();
        $count_centre_officer = centre_officer::where('user_id', '=', $thisUser)
            ->get()->count();
        if($count_centre_officer == 0){
            return redirect('Manager/new');
        }else{
            return redirect('Manager/home');
        }
    }

    Public function managerHome(){
        return view('Manager/home');
    }
    // end manager section 

    // patient  section
    Public function patientHome(){
        return view('Patient/home');
    }
    // end patient  section

    
    // tester  section
    
    Public function testerHome(){
        return view('Tester/home');
    }
    // end tester  section
}
