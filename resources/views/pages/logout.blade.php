

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body,html{
            margin: auto;
            display: flex
        }
        h2 {
            align-self: auto;
        }
        a{
            align-self: auto;
        }
        p{
            <br>
        }
        .d{
            margin: 200px 0 0 0;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="d">
        <h2>BẠN ĐANG ĐĂNG NHẬP VỚI QUYỀN </h2>
<?php
    if(isset($infor)){
        if(isset($infor->Ma_DVCH)){
            echo '<p> Cuu ho </p>';
            echo "Email:". $infor->Email ."<br>";
            echo "Ten Cty:". $infor->Ten_DVCH;
            ?>
            <a href="{{URL::to('/danhsachcancuuho')}}">Tiếp tục</a>;
            <a href="{{URL::to('/dangxuat')}}">Đăng xuất</a>;
        <?php
        }
        else{
            echo '<p> Khach hang </p>';

            echo "Email:". $infor->Email ."<br>";
            echo "Ten:". $infor->Ten_KH;
            ?>
            <a href="{{URL::to('/dangbai')}}">Tiếp tục</a>;
            <a href="{{URL::to('/dangxuat')}}">Đăng xuất</a>;
        <?php
        }
    }    
    else{
        ?>
        <p>Bạn chưa đăng nhập <a href="{{URL::to('/')}}">Về trang chủ</a></p>;
        <?php
    }
?>
    </div>
    
</body>
</html> 

