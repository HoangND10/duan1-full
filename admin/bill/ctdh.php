<div class="row">

    <div class="row frmtitle mb">
        <h1>CHI TIẾT ĐƠN HÀNG</h1>
    </div class="row frmcontent">
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
                <?php
                $i = 0;
                $tongfull = 0;
                foreach ($donhangct as $dhct) {
                    extract($dhct);
                    $tong = $gia * $soluong;
                    $tongfull += $tong;
                    $hinh1 = "<img style='width: 100px;' src='../upload/" . $hinh . "'>";
                    echo '  
                        <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $tensp . ' </td>
                            <td>' . $hinh1 . '</td>
                            <td>' . $gia . ' đ</td>
                            <td>' . $soluong . ' </td>
                            <td>' . $tong . ' </td>
                        </tr>';
                    $i++;
                }
                echo '  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tổng tất cả: </td>
                            <td>' . $tongfull . ' </td>
                        </tr>';
                ?>
            </table>
        </div>
    </div>
</div>