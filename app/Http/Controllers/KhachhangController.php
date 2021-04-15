<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Khachhang;
use App\Models\Thongtindangbai;

class KhachhangController extends Controller
{
    public function dangky(Request $request)
    {
        $ten = $request->Ten_KH;
        $cmnd = $request->CMND;
        $email = $request->Email;
        $sdt = $request->SDT;
        $diachi = $request->Dia_Chi;
        $pass = $request->Mat_Khau;
        $pass_repeat = $request->Mat_Khau_repeat;
        
        if($pass != $pass_repeat){
            return view('pages/khachhang_login');
        }

        $data = ['Ten_KH'=>$ten,'Mat_Khau'=>md5($pass),'Dia_Chi'=>$diachi,'SDT'=>$sdt,'Email'=>$email,'CMND'=>$cmnd];
        // dd($data);
        DB::table('khachhang')->insert($data);
        return view('pages/khachhang_login');
        
    }
    public function login(){

        if(!session()->has('account') && !session()->has('account_ch')){
            return view('pages/khachhang_login');
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
    public function dangbai()
    {
        return view('pages/dangbai');
    }
    public function khachhang(Request $request){
        $khachhang_email = $request->khachhang_email;
        $khachhang_password = md5($request->khachhang_password);

        $codition = [
            "Email" => $khachhang_email,
            "Mat_Khau" => $khachhang_password,
        ];

        $userData = Khachhang::where($codition)->first();
        
        if(session()->has('account') || $codition = [
            "Email" => $khachhang_email,
            "Mat_Khau" => $khachhang_password,
        ]
        && $userData = Khachhang::where($codition)->first()){
            
                if(!session()->has('account')){
                    session(['account' => $userData->Ma_KH]);
                }
              
                return view('pages/dangbai');
        }else{
            echo 'CÓA CÁI MẬT KHẨU THÔI MÀ KHÔNG NHỚ ĐƯỢC À';
        }

    }
    //sua bangdangbai
    public function bangdangbai(Request $request){
        
        $data = array();
        $data['Motathongtin'] = $request -> Motathongtin;
        $data['status'] = 0; // 0 la dang bai-chua ai nhan.........1 la co nguoi nhan.............. 2 laf hoan thanh
        $data['image'] = $request -> image;
        $data['SDT'] = $request -> SDT;
        $data['Diadiem'] = $request -> Diadiem;
        $data['Ngay_Dangbai'] = $request -> Ngay_Dangbai;
        $data['Ma_KH'] = session()->get('account');
        // dd($data);
        DB::table('thongtindangbai')->insert($data);
        return redirect()->to(route("listNews"));

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    //     $thongtindangbai = DB::table('thongtindangbai')->get();
    //     $manager = view('dsbaidang')->with('thongtindangbai',$thongtindangbai);


    //     return view('layout')->with('dsdangbai',$manager);
    }

    public function hienthidangbai()
    {
        return redirect()->to(route("listNews"));
    }
    
    

    public function listUserNews(){
        // $userNews = Thongtindangbai::all();
        $userNews = DB::table('thongtindangbai')->leftJoin('donvicuuho','thongtindangbai.Ma_DVCH','=','donvicuuho.Ma_DVCH')
        ->where('Ma_KH',session()->get('account'))
        ->get();
        return view('pages/dsdangbai', compact('userNews'));
    }
    public function hoanthanhhoadon(Request $request){
        // $userNews = Thongtindangbai::all();
        $donhang = $request->Ma_Dangbai;
        DB::table('thongtindangbai')->where('Ma_Dangbai',$donhang)->update(['status'=>3]);
        $userNews = DB::table('thongtindangbai')->leftJoin('donvicuuho','thongtindangbai.Ma_DVCH','=','donvicuuho.Ma_DVCH')
        ->where('Ma_KH',session()->get('account'))
        ->get();

        return view('pages/dsdangbai', compact('userNews'));
    }
    
}
