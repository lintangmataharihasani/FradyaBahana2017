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
        $products = DB::table('produk')->get();
        $services = DB::table('service')->get();
        return view('pages.dashboard',['products'=> $products], ['services'=>$services]);
    }
    public function about(){
        return view('pages.about');
    }
    public function products(){
<<<<<<< HEAD
    
        $products = DB::table('produk')->get();
        return view('pages.products', ['products' => $products]);

=======
        $products = DB::table('produk')->get();
        return view('pages.products', ['products' => $products]);
>>>>>>> 166804aa76d3127c09b7a310a13027472160c7d7
    }

    public function services(){
        $services = DB::table('service')->get();
        return view('pages.services', ['services' => $services]);
    }

    public function addService(Request $request) {
        $serviceName = $request->input('service_name');
        $serviceDesc = $request->input('service_desc');
        DB::table('service')->insert(['nama'=> $serviceName, 'deskripsi'=>$serviceDesc]);
        return redirect('dashboard');
    }

    public function details(){
        return view('pages.details');
    }
}
