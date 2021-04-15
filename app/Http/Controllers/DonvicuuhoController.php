<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\donvicuuho;
use App\Models\Khachhang;
use App\Models\Thongtindangbai;


class DonvicuuhoController extends Controller
{
    // public function donvicuuhol(){
    //     return view('pages/donvicuuhol');
    // }
    public function dangky(Request $request)
    {
        $ten = $request->Ten_DVCH;
        $email = $request->Email;
        $sdt = $request->SDT;
        $diachi = $request->Dia_Chi;
        $pass = $request->Mat_Khau;
        $status = 1;
        $nghiepvu = $request->Nghiep_Vu;
        $giayphep = $request->Giay_Phep;
        $pass_repeat = $request->Mat_Khau_repeat;
            
        if($pass != $pass_repeat){
            return view('pages/khachhang_login');
        }

        $data = ['Ten_DVCH'=>$ten,'Dia_Chi'=>$diachi,'SDT'=>$sdt,'Nghiep_Vu'=>$nghiepvu,'Email'=>$email,'Trang_Thai'=>$status,'Giay_Phep_Kinh_Doanh'=>$giayphep,'Mat_Khau'=>md5($pass)];
        DB::table('donvicuuho')->insert($data);
        return view('pages/cuuho_login');
        
    }
    public function login(){
        if(!session()->has('account')  && !session()->has('account_ch')){
            return view('pages/cuuho_login');
        }
        else{
            if(!session()->has('account')){
                $dvch = session()->get('account_ch');
                $infor = DB::table('donvicuuho')->where('Ma_DVCH',$dvch)->first();
                return view('pages/logout',compact('infor'));
            }
            else{
                $kh = session()->get('account');
                $infor = DB::table('khachhang')->where('Ma_KH',$kh)->first();
                return view('pages/logout',compact('infor'));
            }
        }
    }

    public function donvicuuhol(Request $request){
        $cuuho_email = $request->cuuho_email;
        $cuuho_password = md5($request->cuuho_password);

        $codition = [
            "Email" => $cuuho_email,
            "Mat_Khau" => $cuuho_password,
        ];

        $userData = donvicuuho::where($codition)->first();
        
        if(session()->has('account_ch')|| $codition = [
            "Email" => $cuuho_email,
            "Mat_Khau" => $cuuho_password,
        ]
        && $userData = donvicuuho::where($codition)->first()){
                if(!session()->has('account_ch')){
                    session(['account_ch' => $userData->Ma_DVCH]);
                }
                $danhsach= DB::table('thongtindangbai')->where('status', '0')->get();
                return view('pages/dsdangbai2',compact('danhsach'));
        }else{
            echo 'CÓA CÁI MẬT KHẨU THÔI MÀ KHÔNG NHỚ ĐƯỢC À';
        }

    }
   
    
}
