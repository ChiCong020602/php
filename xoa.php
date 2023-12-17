<?php
    $kn = mysqli_connect('localhost', 'root', '12345678', 'QLHS');
    if(!$kn){
        echo "Kết nối thất bại";
    }else{
        $mahs = $_POST['mahs'];
        $sql = "delete from hocsinh where MaHS = '$mahs'";
        $kq = mysqli_query($kn, $sql) or die("Lỗi truy vấn");
        header('location:hienthi.php');
    }
?>