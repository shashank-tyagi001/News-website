<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        //Dashboard
        public function dashboard()
        {
            return view('CMD.Dashboard');
        }

        public function mainPage()
        {
            return view('Dahboard.MainPage');
        }

        public function getApi()
        {
            return view('getApi');
        }


}
