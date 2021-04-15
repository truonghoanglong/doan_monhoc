
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

<h2>Danh sách bài đăng của bạn</h2>
<a href="{{URL::to('/dangbaiviet')}}">Đăng bài</a>
<table>
  <tr>
    <th>STT</th>
    <th>Mô tả thông tin</th>
    <th>Số điện thoại</th>
    <th>Địa điểm</th>
    <th>Ảnh</th>
    <th>Ngày</th>
    <th>Đơn vị nhận cứu hộ</th>
    <th class="text-center">Action</th>
  </tr>
  @php $stt = 1; @endphp
  @foreach($userNews as $news)
    <tr>
      <td>{{$stt++}}</td>
      <td>{{$news->Motathongtin}}</td>
      <td>{{$news->SDT}}</td>
      <td>{{$news->Diadiem}}</td>
      <td>{{$news->image}}</td>
      <td>{{date("m/d/Y", strtotime($news->Ngay_DangBai))}}</td>
      <td>{{$news->Ma_DVCH .' '. $news->Ten_DVCH}}</td>
      <td class="text-center">
        @if ($news->status == 0)
          {{'Chưa ai chọn'}}
        @elseif ($news->status == 1)
          {{'Đã có người chọn'}}  
        @elseif ($news->status == 2)
          <button><a href="{{URL::to("/hoanthanhhoadon?Ma_Dangbai=$news->Ma_Dangbai")}}">Hoàn tất đơn hàng</a></button>
        @else 
          {{'Đã hoàn thanh'}}
        @endif
      
      </td>
    </tr>
  @endforeach 
 
</table>

</body>
</html>
