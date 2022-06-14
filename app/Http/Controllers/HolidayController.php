<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    public function index(){
        $holidays = Holiday::all();
        return view('holidaysList', compact('holidays'));
    }
}
