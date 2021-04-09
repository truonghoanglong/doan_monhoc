<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Khachhang;
use App\Models\Thongtindangbai;

class KhachhangController extends Controller
{
    public function login(){
        return view('pages/khachhang_login');
    }

    public function khachhang(Request $request){
        $khachhang_email = $request->khachhang_email;
        $khachhang_password = md5($request->khachhang_password);

        $codition = [
            "Email" => $khachhang_email,
            "Mat_Khau" => $khachhang_password,
        ];

        $userData = Khachhang::where($codition)->first();
        //dd ($userData);
        
        


        if($codition = [
            "Email" => $khachhang_email,
            "Mat_Khau" => $khachhang_password,
        ]
        && $userData = Khachhang::where($codition)->first()){
                return view('pages/dangbai');
        }else{
            echo 'CÓA CÁI MẬT KHẨU THÔI MÀ KHÔNG NHỚ ĐƯỢC À';
        }

    }
    //sua bangdangbai
    public function bangdangbai(Request $request){
        
        $data = array();
        
        $data['Motathongtin'] = $request -> Motathongtin;
        $data['image'] = $request -> image;
        $data['SDT'] = $request -> SDT;
        $data['Diadiem'] = $request -> Diadiem;
        $data['Ngay_Dangbai'] = $request -> Ngay_Dangbai;
       


        DB::table('thongtindangbai')->insert($data);
        return redirect()->to(route("listNews"));

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    //     $thongtindangbai = DB::table('thongtindangbai')->get();
    //     $manager = view('dsbaidang')->with('thongtindangbai',$thongtindangbai);


    //     return view('layout')->with('dsdangbai',$manager);
    }

    

    public function listUserNews(){
        $userNews = Thongtindangbai::all();
        return view('pages/dsdangbai', compact('userNews'));
    }
    
}
