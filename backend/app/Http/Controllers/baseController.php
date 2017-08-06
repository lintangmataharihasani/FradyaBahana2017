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
use Log;

class baseController extends Controller
{
    public function index(){
        $header_tagline= DB::table('konten')->where('nama_konten', 'Tagline Header Home')->value('konten');
        $section_tagline = DB::table('konten')->where('nama_konten', 'Tagline Section Home')->value('konten');
        $about = DB::table('konten')->where('nama_konten', 'About Us')->value('konten');
        return view('pages.home', ['about'=>$about, 'header_tagline'=>$header_tagline, 'section_tagline'=>$section_tagline]);
    }

    public function dashboard(Request $request){
        if($request->session()->has('users')){
            $products = DB::table('produk')->get();
            $services = DB::table('service')->get();
            $contents = DB::table('konten')->get();
            return view('pages.dashboard',['products'=> $products, 'services'=>$services, 'contents'=>$contents]);    
        }else{
            return redirect('home');
        }
    }

    public function login() {
        return view('pages.login');
    }

    public function about(){
        $about = DB::table('konten')->where('nama_konten', 'About Us')->value('konten');
        return view('pages.about', ['about'=>$about]);
    }

    public function products(){
        $about = DB::table('konten')->where('nama_konten', 'About Us')->value('konten');
        $header_tagline= DB::table('konten')->where('nama_konten', 'Tagline Header Product')->value('konten');
        $products = DB::table('produk')->simplePaginate(3);
        return view('pages.products', ['products' => $products, 'header_tagline'=>$header_tagline, 'about'=>$about]);
    }

    public function editProduct(Request $request){
        $nama = $request->input('nama');
        //$kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');
        $state = $request->input('state');
        $concentration = $request->input('concentration');
        
        DB::table('produk')
                ->where('nama', $nama)
                ->where('state', $state)
                ->where('concentration', $concentration)
                ->update(array('deskripsi' => $deskripsi));
        return redirect('dashboard');

    }
    public function tes(){
        return view('pages.tes');
    }

    public function services(){
        $about = DB::table('konten')->where('nama_konten', 'About Us')->value('konten');
        $header_tagline= DB::table('konten')->where('nama_konten', 'Tagline Header Service')->value('konten');
        $services = DB::table('service')->simplePaginate(5);
        return view('pages.services', ['services' => $services, 'header_tagline'=>$header_tagline, 'about'=>$about]);
    }

    public function addService(Request $request) {
        error_log('message');
        $serviceName = $request->input('service_name');
        $serviceDesc = $request->input('service_desc');
        DB::table('service')->insert(['nama'=> $serviceName, 'deskripsi'=>$serviceDesc]);
        return redirect('dashboard');
    }

    public function details(){
        return view('pages.details');
    }

    public function editService(Request $request) {
        $serviceName = $request->input('service_name_edit');
        $serviceDesc = $request->input('service_desc_edit');
        DB::table('service')
                ->where('nama', $serviceName)
                ->update(array('deskripsi' => $serviceDesc));
        return redirect('dashboard');
    }

    public function deleteService(Request $request) {
        $serviceName = $request->input('service_name_delete');
        DB::table('service')->where('nama','=',$serviceName)->delete();
        return redirect('dashboard');
    }

    public function deleteProduct(Request $request) {
        $productName = $request->input('product_name_delete');
        DB::table('produk')->where('nama','=',$productName)->delete();
        return redirect('dashboard');
    }

    public function editContent(Request $request) {
        $contentName = $request->input('content_name_edit');
        $contentDesc = $request->input('content_desc_edit');
        DB::table('konten')
                ->where('nama_konten', $contentName)
                ->update(array('konten' => $contentDesc));
       // DB::table('service')->insert(['nama'=> $serviceName, 'deskripsi'=>$serviceDesc]);
        return redirect('dashboard');
    }

    public function loginAdmin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $account = DB::table('akun')->where('email',$email)->count();
        $passwordDB = DB::table('akun')->where('email',$email)->value('password');

        if ($account==1 && $passwordDB==$password) {
            $request->session()->put('users', '$email');
            return redirect('dashboard');
        } else {
            return redirect('login');    
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('home');   
    }
}
