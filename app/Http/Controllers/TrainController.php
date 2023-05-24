<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;
use DateTime;

class TrainController extends Controller
{
    public function index(){
        $trains = trains::all();

        return view('welcome',compact('trains'));
    }

    public function show(){
        $trains = trains::all()->where('departure_time','>=',date("Y-m-d")." 00:00:01");

        return view('welcome',compact('trains'));
    }
}
