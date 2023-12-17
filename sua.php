<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kn = mysqli_connect('localhost', 'root', '12345678', 'QLHS');
    if(!$kn){
        echo "Kết nối thất bại";
    }else{
        $mahs = $_POST['mahs'];
        $sql = "select * from hocsinh where MaHS = '$mahs'";
        $kq = mysqli_query($kn, $sql) or die("Lỗi truy vấn");
        $row = mysqli_fetch_row($kq);
    }
    ?>
    <h1 align=center >Thông tin học sinh</h1>
    <form action="xl_sua.php" method="post" enctype='multipart/form-data'>
        <table align=center>
            <tr>
                <td>Mã học sinh</td>
                <td><input type="text" name='mahs' value="<?php echo $row[0];?>"></td>
            </tr>
            <tr>
                <td>Tên học sinh</td>
                <td><input type="text" name="tenhs" value="<?php echo $row[1];?>"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="ha" value="<?php echo $row[2];?>"></td>
            </tr>
            <tr>
                <td>Xếp loại</td>
                <td><input type="text" name="xl" value="<?php echo $row[3];?>"></td>
            </tr>
            <tr>
                <td>HK1</td>
                <td><input type="text" name="hk1" value="<?php echo $row[4];?>"></td>
            </tr>
            <tr>
                <td>HK2</td>
                <td><input type="text" name="hk2" value="<?php echo $row[5];?>"></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" value="Sửa"></td>
            </tr>
        </table>
    </form>
    <p align=center ><a href="hienthi.php">Thoát</a></p>
</body>
</html>