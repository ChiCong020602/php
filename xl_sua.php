<?php
$kn = mysqli_connect('localhost', 'root', '12345678', 'QLHS');
if(!$kn){
    echo "Kết nối thất bại";
}else{
    move_uploaded_file($_FILES['ha']['tmp_name'], 'upload/'.$_FILES['ha']['name']);
    $mahs = $_POST['mahs'];
    $tenhs = $_POST['tenhs'];
    $ha = 'upload/'.$_FILES['ha']['name'];
    $xl = $_POST['xl'];
    $hk1 = $_POST['hk1'];
    $hk2 = $_POST['hk2'];
    $sql = "UPDATE `hocsinh` SET `MaHS`='$mahs',`Ten_HS`='$tenhs',`HinhAnh`='$ha',`XepLoai`='$xl',`HK1`=$hk1,`HK2`=$hk2 WHERE mahs = '$mahs'";
    $kq = mysqli_query($kn, $sql) or die("Lỗi truy vấn");
    header('location:hienthi.php');
}
?>