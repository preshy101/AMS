<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
   public function allAppointments(){
    $appoints = Appointment::all();
    return view('admin.apointments.appointment', compact('appoints'));
   }
   public function storeAppointment(Request $request){
    $this->validate($request,[
        'name' =>'required',
        'date' =>'required',
        'time' =>'required',
        'reasonForAppointment' =>'required'
    ]);
    // dd($data);
    // $savedData = Appointment::create([$request->all()]);
    $savedData = Appointment::create($request->all());

    return redirect()->back()->with('message', $savedData->name."'s Appointment booked Successfully ");
   }
   public function UpdateAppointment(Request $request, $id){
    $this->validate($request,[
        'status' =>'required'
    ]);
    $data = Appointment::findOrFail($id);
    $data->status = $request->status;
    $data->save();
    return redirect()->back()->with('message', $data->name."'s Appointment Updated Successfully ");
   }
   public function ResultAppointment( $id){
    $data = Appointment::findOrFail($id);

    return view('admin.apointments.edit-appointment', compact('data'));
   }
   public function ResultStoreAppointment(Request $request,$id){
      $this->validate($request,[
        'status' =>'required',
        'name' =>'required',
        'date' =>'required',
        'time' =>'required',
        'result' =>'required',
        'reasonForAppointment' =>'required'
    ]);

    $data = Appointment::findOrFail($id);
    $data->status = $request->status;
    $data->name = $request->name;
    $data->date = $request->date;
    $data->time = $request->time;
    $data->result = $request->result;
    $data->reasonForAppointment = $request->reasonForAppointment;
    $data->save();

    $appoints = Appointment::all();
    return view('admin.apointments.appointment',compact('appoints'))->with('message', $data->name."'s Appointment Result Updated Successfully ");
   }
   public function DeleteAppointment( $id){

    $data = Appointment::findOrFail($id)->delete();
    return redirect()->back()->with('message', "  Appointment Deleted Successfully ");
   }
}