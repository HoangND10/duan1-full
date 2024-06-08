<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Your Order</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>TOTAL AMOUNT</th>
                                    <th>PAYMENT METHODS</th>
                                    <th>PURCHASE DATE</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($donhang as $dh) {
                                    extract($dh);
                                    $ctdh = "index.php?act=ctdh&iddh=" . $iddh;
                                    echo '
                                        <tr>
                                            <td class="product-name"><a href="#">' . $hoten . '</a></td>
                                            <td class="product-price-cart"><span class="amount">' . $tongtien . ' đ</span></td>
                                            <td class="product-name"><a href="#">' . $pttt . '</a></td>
                                            <td class="product-name"><a href="#">' . $ngaymua . '</a></td>
                                            <td class="product-name"><a href="#">' . $tentt . '</a></td>
                                            <td class="product-name"><a href="' . $ctdh . '"><input type="button" value="Detail"></a></td>
                                        </tr>
                                    ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>