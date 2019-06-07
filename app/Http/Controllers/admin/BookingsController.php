<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    public function index(){
        return view('admin.bookings.index');
    }

    public function create(){
        return view('admin.bookings.create');
    }
}


