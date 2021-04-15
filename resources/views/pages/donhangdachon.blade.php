
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
</style>
</head>
<body>
<h2>DANH SÁCH CÁC KHÁCH HÀNG BẠN NHẬN CỨU HỘ</h2>
<a href="{{URL::to('/danhsachcancuuho')}}">Danh sách cứu hộ</a>
<table>
  <tr>
    <th>STT</th>
    <th>Tên Khách Hàng</th>
    <th>Số điện thoại</th>
    <th>Mô tả thông tin</th>
    <th>Địa điểm</th>
    <th>Ảnh</th>
    <th>Ngày</th>
    <th class="text-center">Action</th>
  </tr>
  @php $stt = 1; @endphp
  @foreach($listdonhang as $item)
    <tr>
      <td>{{$stt++}}</td>
      <td>{{$item->Ten_KH}}</td>
      <td>{{$item->SDT}}</td>
      <td>{{$item->Motathongtin}}</td>
      <td>{{$item->Diadiem}}</td>
      <td>{{$item->image}}</td>
      <td>{{date("m/d/Y", strtotime($item->Ngay_DangBai))}}</td>
      <td class="text-center">
        @if ($item->status == 1)
          <button><a href='{{URL::to("/hoanthanhcuuho?Ma_Dangbai=$item->Ma_Dangbai")}}'>Hoàn tất</a></button>
        @else 
          {{'Đã hoàn thanh'}}
        @endif
      </td>
    </tr>
  @endforeach 
 
</table>

</body>
</html>
