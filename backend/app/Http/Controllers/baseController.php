<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Http\Controllers\stdClass;

class baseController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function about(){
        return view('pages.about');
    }
    public function products(){
        return view('pages.products');
    }
    public function services(){
        $services = DB::table('service')->get();
        return view('pages.services', ['services' => $services]);
    }


}
