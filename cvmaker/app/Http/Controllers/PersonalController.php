<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //
    public function __construct(){
    	// $this->middleware();
    }

	public function first(){
		return view('personal.firstpersonal');
	}
    public function show(){

    	return view('personal.showpersonal');
    }
   
   	public function create(Request $request)
   	{
   		//loading model for the view
   		$personal = Personal::class;
   		$validated = $request->validate([
   			"firstname" => 'required|max:25',
   			"lastname" => 'required|max:25',
   			"address" => 'required|max:100',
   			"address2" => 'max:100',
   			"city" => 'max:50',
   			"postalcode" => 'max:50',
   			"country" => 'max:50',
   			"phone" => 'max:15',
   			"dob" => 'required',
   			"website" => 'required',
   			"objective" => 'required|max:300',
   			"picture" => 'required',
   		]);
   		$personal->first_name= $request->firstname;
   		$personal->last_name= $request->lastname;
   		$personal->address= $request->address;
   		$personal->address_2= $request->address2;
   		$personal->city_name= $request->city;
   		$personal->postalcode = $request->portalcode;
   		$personal->phone= $request->phone;
   		$personal->age= $request->age;
   		$personal->date_of_birth= $request->dob;
   		$personal->website= $request->website;
   		$personal->objective= $request->objective;
   		$personal::save();

   		Session::flash('message', 'Data Successfull Inserted'); 

   		return redirect('FirstEducationShow');

   	}

   	public function edit(Request $request)
   	{
   		# code...
   	}
   	public function update(Request $request)
   	{
   		# code...
   	}
   	
}
