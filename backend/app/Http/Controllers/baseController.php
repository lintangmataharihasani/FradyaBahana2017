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
        $productData = DB::select('SELECT * FROM PRODUK');
        return view('pages.products', ['productData' => $productData]);
    }
    public function services(){
        return view('pages.services');
    }
}
