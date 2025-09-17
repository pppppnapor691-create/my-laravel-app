<?php

namespace App\Http\Controllers;

use App\Models\Cybersport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SuperController extends Controller
{
    public function index(){
        return view('super');
    }
}
