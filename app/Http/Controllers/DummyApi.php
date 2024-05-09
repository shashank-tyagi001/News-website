<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class DummyApi extends Controller
{
    public function sportGet()
    {
       $data = Register::where('area','Sports')->get();
         return response()->json($data);
    }

    public function technologyGet()
    {
       $data = Register::where('area','Technology')->get();
         return response()->json($data);
    }

    public function businessGet()
    {
       $data = Register::where('area','Business')->get();
         return response()->json($data);
    }


    public function entertainmentGet()
    {
       $data = Register::where('area','Entertainment')->get();
         return response()->json($data);
    }

    public function latestNews()
    {
        $data = Register::where('area','Latest')->get();
        return response()->json($data);
    }

    public function popularNews()
    {
        $data = Register::where('area','Popular')->get();
        return response()->json($data);
    }



}
