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
                                    <th>PRODUCT</th>
                                    <th>IMAGE</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tong = 0;
                                $i = 0;
                                foreach ($_SESSION['mycart'] as $cart) {
                                    $hinh1 = $img_path . $cart[2];
                                    $ttien = $cart[3] * $cart[4];
                                    $tong += $ttien;
                                    $xoasp = '<a href="index.php?act=deletecart&idcart=' . $i . '" ><input type="button" value="Delete"></a>';
                                    echo '
                                        <tr>
                                            <td class="product-name"><a href="#">' . $cart[1] . '</a></td>
                                            <td class="product-price-cart"><img style: width="100" src="' . $hinh1 . '" alt="Cart product Image"></td>
                                            <td class="product-name"><a href="#">' . $cart[3] . ' đ</a></td>
                                            <td class="product-name"><a href="#">' . $cart[4] . '</a></td>
                                            <td class="product-name"><a href="#">' . $ttien . '</a></td>
                                            <td class="product-name">' . $xoasp . '</td>
                                        </tr>
                                    ';
                                    $i += 1;
                                }
                                echo '
                                <tr>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#"></a></td>
                                    <td class="product-name"><a href="#">TOTAL ALL: </a></td>
                                    <td class="product-name"><a href="#">' . $tong . '</a></td>
                                </tr>';
                                ?>
                            </tbody>
                        </table>
                        <div class="buttons">
                            <a href="index.php?act=bill" class="btn btn-dark btn-hover-primary mb-30px">Checkout</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>