<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Validator;

class testApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       $contact = Contact::find($request->id);
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->subject = $request->subject;
       $contact->message = $request->message;
       $result = $contact->save();
       if($result)
       {
        return ["Result" => "Data Updated Successfully"];
       }else{
        return ["Result" => "Data Not updated Successfully"];
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $contact = Contact::find($id);
      $result = $contact->delete();
      if($result)
      {
       return ["Result" => "Data Deleted Successfully"];
      }else{
       return ["Result" => "Data Not Deleted Successfully"];
      }
    }


}
