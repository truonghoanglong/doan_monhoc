@extends('layout')    
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" style="text-align: center;padding:5px; margin: 100px 0 0 200px;">
        <tr>
          <th>MÃ KHÁCH HÀNG</th>
          <th>Mô Tả</th>
          <th>SDT</th>
          <th>Địa Điểm</th> 
          <th>Hình Ảnh</th>
          <th>Ngày Đăng</th>
          <th class="text-center">Action</th>
        </tr>
          <tr>
            <td>{{$inforDonHang->Ma_KH}}</td>
            <td>{{$inforDonHang->Motathongtin}}</td>
            <td>{{$inforDonHang->SDT}}</td>
            <td>{{$inforDonHang->Diadiem}}</td>
            <td>{{$inforDonHang->image}}</td>
            <td>{{date("m/d/Y", strtotime($inforDonHang->Ngay_DangBai))}}</td>
            <td class="text-center">
              <button style="color:aqua; "><a href='{{URL::to("/xacnhan?Ma_Dangbai=$inforDonHang->Ma_Dangbai")}}'>Xác nhận chọn khách hàng</a></button>
            </td>
          </tr>
       
      </table>
  
</body>
</html>

@endsection