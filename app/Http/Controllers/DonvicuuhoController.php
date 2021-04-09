<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\donvicuuho;

class DonvicuuhoController extends Controller
{
    public function donvicuuhol(){
        return view('pages/donvicuuhol');
    }
    // public function donvicuuhol(Request $request){
    //     //return view('pages/donvicuuhol');
    //     $donvi_email = $request->donvi_email;
    //     $donvi_matkhau = md5($request->donvi_matkhau);

    //     $codition = [
    //         "Email" => $donvi_email,
    //         "Mat_Khau" => $donvi_matkhau,
    //     ];

    //     if($codition = [
    //         "Email" => $donvi_email,
    //         "Mat_Khau" => $donvi_matkhau,
    //     ]
    //     && $userData = Khachhang::where($codition)->first()){
    //             return view('pages/donvicuuhol');
    //     }else{
    //         echo 'CÓA CÁI MẬT KHẨU THÔI MÀ KHÔNG NHỚ ĐƯỢC À';
    //     }

        
    // }
    
}
