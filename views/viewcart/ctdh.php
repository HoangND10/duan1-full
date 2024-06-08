<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">ORDER DETAILS</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>IMAGE</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_all = 0;
                                foreach ($donhangct as $dhct) {
                                    extract($dhct);
                                    $total = $gia * $soluong;
                                    $total_all += $total;
                                    echo '
                                        <tr>
                                            <td class="product-name"><a href="#">' . $tensp . '</a></td>
                                            <td class="product-price-cart"><img style: width="100" src="upload/' . $hinh . '" alt="Cart product Image"></td>
                                            <td class="product-price-cart"><span class="amount">' . $gia . ' đ</span></td>
                                            <td class="product-name"><a href="#">' . $soluong . '</a></td>
                                            <td class="product-name"><a href="#">' . $total . '</a></td>
                                        </tr>
                                    ';
                                }
                                echo '
                                <tr>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#">TOTAL ALL: </a></td>
                                    <td class="product-name"><a href="#">' . $total_all . ' đ</a></td>
                                </tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>