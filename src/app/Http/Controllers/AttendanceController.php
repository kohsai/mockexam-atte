<?php

namespace App\Http\Controllers;
use App\Models\attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance()
    {
    return view('attendance');
    }

    public function index()
    {
        return view('index');
    }
}
