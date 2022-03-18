<?php
    session_start();
    require('connect.php');
    $sqlll = "select * from cart";
    $resullt = mysqli_query($conn , $sqlll);
    
    if( mysqli_fetch_assoc($resullt) < 2){
        echo "<script language='javascript'>alert('chưa có sản phẩm trong giỏ hàng');";
        echo "location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main-menu.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Dream Team</title>
</head>
<body>
    <div class="all">
        <div class="header">
            <div class="topbar">
                <div class="topbar_place">
                    <i class="fas fa-map-marker"></i> 34 Dương Thưởng, Hòa Cường Bắc, Hải Châu, Đà Nẵng
                </div>

                <div class="topbar_media">
                    <div class="media_phone">
                        <i class="fas fa-phone"></i>
                        <span>0123456789</span>
                    </div>
                    <div class="media_fb">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_insta">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_twitter">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_ytb">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="header_main">
                <div class="header_inner">
                    <div class="header_logo">
                        <img class="header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
                    </div>

                    <div class="header_center">
                        <div class="header_search">
                            <input type="search" class="search_web" placeholder="Tìm kiếm">
                        </div>

                        <div class="header_search_logo">
                            <button class="search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="header_right">
                        <div class="cart">
                            <a href="facebook.com" class="cart_text">Giỏ Hàng</a>

                            <div class="cart_box">
                                <div class="logo_cart">0</div>
                            </div>
                        </div>

                        <div class="header_signin">
                            <button class="btn_login">Đăng Ký</button>
                        </div>

                        <div class="header_login">
                            <button class="btn_login">Đăng Nhập</button>
                        </div>
                    </div>

                </div>


            </div>

            <div class="menu">
                <a id="home" class="header_home_text">
                    <span>TRANG CHỦ</span>
                </a>
                <a id="phone" class="header_home_text">
                    <span>ĐIỆN THOẠI</span>
                </a>
                <a id="laptop" class="header_home_text">
                    <span>LAPTOP</span>
                </a>
                <a id="tablet" class="header_home_text">
                    <span>MÁY TÍNH BẢNG</span>
                </a>
                <a id="phukien" class="header_home_text">
                    <span>PHỤ KIỆN</span>
                </a>
                <a id="contact" class="header_home_text">
                    <span>LIÊN HỆ</span>
                </a>
            </div>
        </div>
        <div class="main">
            <div class="all-cart">
                <div class="main-cart">  
                    <div class="head-cart-left">
                         <table class="cart_table">
                            <tbody>
                                <tr class="menu-cart">  
                                    <div class="">
                                    <th class="cart_product">SẢN PHẨM</th>
                                    <th class="cart_price">GIÁ</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>TẠM TÍNH</th>
                                    </div>  
                                </tr>
                                <?php 
                                    require("connet.php");
                                    $sqlll = "select * from cart";
                                    $resulttt = mysqli_query($conn , $sqlll);
                                    $phigiaohang = 20000;
                                    $tong =0;
                                    $rowww = mysqli_fetch_assoc($resulttt);
                                    while($rowww = mysqli_fetch_assoc($resulttt))
                                    {
                                        $gia = (int)$rowww["gia"];
                                        $tamtinh = $gia*$rowww["quantity"];
                                        $tong += (int)$tamtinh;
                                        
                                ?>

                                <tr class="cartList ">
                                    <td class="cart_product">
                                        <div class="cart-items-remove-box cart_body">
                                            <a href="./delete.php?key=<?php echo $rowww['idProduct']  ?>" class="cart-items-remove tag-a">x</a>
                                            
                                        </div>
                                        <div class="cart-items-img cart_body">
                                            <img src="<?php echo './assetss/img/' . $rowww["imgProduct"]?>" alt="" class="cart-items-img">
                                        </div>
                                        <div class="cart-items-name cart_body">
                                            <span><?php   echo $rowww["tenSp"]?></span>
                                        </div>
                                    </td>
                                    <td class="cart_body " style="font-weight: 600; text-align: center;">
                                        <span><?php   echo $rowww["gia"]?><sup>đ</sup></span>
                                    </td>
                                    <td class="num" style="font-weight: 600; text-align: center;">
                                        <div class="quantity-product">
                                            <input type="button" value="-" class="tru">
                                            <input type="number" name="154" id="" class="value-quantity" value="<?php   echo $rowww["quantity"]?>">
                                            <input type="button" value="+" class="cong" onclick="subTotal()">
                                        </div>
                                    </td>
                                    <td 
                                        class="total_money_details" style="font-weight: 600; text-align: center;padding-top:17px;"><?php   echo $tamtinh?><sup>đ</sup>
                                    </td>
                                    
                                        
                                </tr>
                                <?php
                                    }
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                        <div>
                            
                        </div>
                        <div class="btn-cart-left">
                            <div class="continue_view">
                                <i class="fas fa-long-arrow-alt-left"></i>
                                <a href="index.php">TIẾP TỤC XEM SẢN PHẨM</a>
                            </div>
                            <button type="submit" class="update_cart opacity">
                                <span style="padding-top: 3px;font-size:13px;">CẬP NHẬT GIỎ HÀNG</span>
                            </button>

                        </div>
                    </div>
                    
                
                    <div class="haed-cart-right">
                        <div class="head-content-cart">
                                    <h2>Tổng Số Lượng</h2>
                                
                            <div class="tam-tinh">
                                <span>Tạm tính</span>
                                 <div class="tam-tinh-money">
                                     <span><?php   echo $tong?></span>
                                     <sup>đ</sup>
                                    </div>                    
                            </div>
                            <div class="giao-hang tam-tinh">
                                <span> Phí giao hàng</span>
                                <div class="giao-hang-main tam-tinh-money">
                                    <span> 20.000<sup>đ</sup></span>
                                </div>
                            </div>
                            <div class="voucher">
                                <div class="voucher-head">
                                    <i class="fa-solid fa-tag icon-voucher"></i>
                                    <span class="text-voucher-head" >Mã giảm giá </span>
                                </div>
                                <div class="text-voucher">
                                    <input type="text" class="text-voucher" placeholder="Mã Giảm Giá"> <br>
                                    <input type="button" value="Áp Dụng" class="button-AD">
                                    
                                </div>
                                
                            </div>
                           
                            
                        </div>
                        <div class="total_money">
                                <div class="total_money-title">
                                    <span>Tổng tiền:</span>
                                </div>
                                <div class="total-main"><?php $tong += $phigiaohang;  echo $tong?><sup>đ</sup></div>                    
                        </div>
                        <div>
                            <input type="button" value="TIẾN HÀNH THANH TOÁN" class="button-TT">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        

        <div class="footer">

        </div>
    </div>
    
</body>

    
</html>