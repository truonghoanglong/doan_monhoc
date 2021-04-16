@extends('layout')    
@section('content')


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset("public/frontend/css/dsbaidang.css")}}">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2,a,table{
  padding: 200px 0 0 200px;
}
</style>
</head>
<body>
<h2>DANH SÁCH CÁC BÀI ĐĂNG CỨU HỘ</h2>
<a href="{{URL::to("/danhsachdachon")}}">Các cuốc cứu hộ tôi đã nhận</a>
<table style="margin-left: 200px">
  <tr>
    <th>STT</th>
    <th>Mô tả thông tin</th>
    <th>Số điện thoại</th>
    <th>Địa điểm</th>
    <th>Ảnh</th>
    <th>Ngày</th>
    <th class="text-center">Action</th>
  </tr>
  @php $stt = 1; @endphp
  @foreach($danhsach as $item)
    <tr>
      <td>{{$stt++}}</td>
      <td>{{$item->Motathongtin}}</td>
      <td>{{$item->SDT}}</td>
      <td>{{$item->Diadiem}}</td>
      <td>{{$item->image}}</td>
      <td>{{date("m/d/Y", strtotime($item->Ngay_DangBai))}}</td>
      <td class="text-center">
        <button><a href='{{URL::to("/donhang?Ma_Dangbai=$item->Ma_Dangbai")}}'>Xem chi tiết</a></button>
      </td>
    </tr>
  @endforeach 
 
</table>

</body>
</html>

@endsection