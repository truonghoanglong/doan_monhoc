<h2>BẠN ĐANG ĐĂNG NHẠP VỚI QUYỀN </h2>
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