<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donhang;
use App\Models\Khachhang;
use App\Models\Thongtindangbai;
class DonhangController extends Controller
{
    public function donhang(Request $request){
        $donhang = $request->Ma_Dangbai;
        $inforDonHang = DB::table('thongtindangbai')->where('Ma_Dangbai',$donhang)->first();
        return view('pages/donhang',compact('inforDonHang'));
    }
    public function xacnhan(Request $request){
        $donhang = $request->Ma_Dangbai;
        DB::table('thongtindangbai')->where('Ma_Dangbai',$donhang)->update(['status'=>1,'Ma_DVCH'=>session()->get('account_ch')]);
        $listdonhang = DB::table('thongtindangbai')->join('khachhang','thongtindangbai.Ma_KH','=','khachhang.Ma_KH')
        ->where('Ma_DVCH',session()->get('account_ch'))
        ->get();
            
        // echo('<pre>');
        // print_r($listdonhang);
        
        // exit();
        return view('pages/donhangdachon',compact('listdonhang'));
    }
    
    public function danhsachdachon(){
        $listdonhang = DB::table('thongtindangbai')->join('khachhang','thongtindangbai.Ma_KH','=','khachhang.Ma_KH')
        ->where('Ma_DVCH',session()->get('account_ch'))
        ->get();
        return view('pages/donhangdachon',compact('listdonhang'));
    }
    public function hoanthanh(Request $request){
        $donhang = $request->Ma_Dangbai;
        DB::table('thongtindangbai')->where('Ma_Dangbai',$donhang)->update(['status'=>2,'Ma_DVCH'=>session()->get('account_ch')]);
        $listdonhang = DB::table('thongtindangbai')->join('khachhang','thongtindangbai.Ma_KH','=','khachhang.Ma_KH')
        ->where('Ma_DVCH',session()->get('account_ch'))
        ->get();
            
        // echo('<pre>');
        // print_r($listdonhang);
        
        // exit();
        return view('pages/donhangdachon',compact('listdonhang'));
    }
}
