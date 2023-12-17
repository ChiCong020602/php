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
        echo "<h1 align='center'>Quản lý sinh viên</h1>";
        echo '<form action="sua.php" method="post">';
            echo '<table align="center">';
                echo '<tr>';
                    echo '<td>Mã sinh viên</td>';
                    echo '<td><input type="text" name="mahs"></td>';
                echo '</tr>';
                echo '<tr>';
                     echo '<td><input type="submit" value="Sửa"></td>';
                echo '</tr>';
            echo '</table>';
        echo '</form>';
        echo '<form action="xoa.php" method="post" >';
            echo '<table align="center">';
                echo '<tr>';
                    echo '<td>Mã sinh viên</td>';
                    echo '<td><input type="text" name="mahs"></td>';
                echo '</tr>';
                echo '<tr>';
                     echo '<td><input type="submit" value="Xóa"></td>';
                echo '</tr>';
            echo '</table>';
        echo '</form>';
        $sql = 'select * from hocsinh';
        $kq = mysqli_query($kn, $sql) or die("Lỗi truy vấn");
        if(mysqli_num_rows($kq)>0){
            echo "<table border=1 align=center width=900px >";
            echo "<tr>";
            echo "<td>MaHS</td>";
            echo "<td>Ten_HS</td>";
            echo "<td>HinhAnh</td>";
            echo "<td>Xeploai</td>";
            echo "<td>HK1</td>";
            echo "<td>HK2</td>";
            echo "<td>Hocbong</td>";
            echo "</tr>";
            while($row = mysqli_fetch_row($kq)){
                $mahs = $row[0];
                $tenhs = $row[1];
                $hA = $row[2];
                $xl = $row[3];
                $hk1 = $row[4];
                $hk2 = $row[5];
                $TBC = ($hk1 + $hk2*2)/3;
                if($xl=="A" && $TBC > 9){
                    $hb = "1000000";
                }else if($xl=="B" && $TBC > 8){
                    $hb = "500000";
                }else{
                    $hb = "Không có";
                }
                echo "<tr>";
                echo "<td>$mahs</td>";
                echo "<td>$tenhs</td>";
                echo "<td><img width=100px src='$hA' alt='Lỗi'></td>";
                echo "<td>$xl</td>";
                echo "<td>$hk1</td>";
                echo "<td>$hk2</td>";
                echo "<td>$hb</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
    
</body>
</html>