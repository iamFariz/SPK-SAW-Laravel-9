<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use App\Models\Mobil;

class HomeController extends Controller
{

    public function index(){
        $mobils = Mobil::latest()->get();
        return view('frontend.home',compact('mobils'));
    }

    public function contact(){
        return view('frontend.contact');
    }
    public function spk(){
        return view('frontend.spk');
    }
    public function about(){
        return view('frontend.about');
    }
    public function detail(Mobil $mobil){

        return view('frontend.detail',compact('mobil'));
    }

    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function redirect(){

        $is_admin=Auth::user()->is_admin;
        if($is_admin=='1')
        {
            return view('admin.dashboard');
        }else{
            return view('home');
        }
    }
    public function contactStore(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        Message::create($data);
        return redirect()->back()->with([
            'message'=> 'Pesan Anda Berhasil DiKirim',
            'alert-type' => 'success'
        ]);
    }
}
