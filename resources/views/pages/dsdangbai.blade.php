
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


<table>
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
  @foreach($userNews as $news)
    <tr>
      <td>{{$stt++}}</td>
      <td>{{$news->Motathongtin}}</td>
      <td>{{$news->SDT}}</td>
      <td>{{$news->Diadiem}}</td>
      <td>{{$news->image}}</td>
      <td>{{date("m/d/Y", strtotime($news->Ngay_DangBai))}}</td>
      <td class="text-center">
        <button>Xác Nhận</button>
        <button>Hoàn Thành</button>
      </td>
    </tr>
  @endforeach 
 
</table>

</body>
</html>
