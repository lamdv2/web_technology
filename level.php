
<?php 
    session_start();
   
    require("config.php");
    $sql = "select * from user";
    $result=mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    if(!isset($_SESSION["username"])){
        header("location: giaodien.php");
    }
    if($_SESSION["level"]!=0){
        header("location: admin.php");
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href="..\favicon.ico"/>
    <title>Kteam</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/assets/js/level.js"></script>
   <script src="/assets/js/pagination.js"></script>
    <!-- <link rel="stylesheet" href="/assets/css/level1.css "> -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/level.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

    <body>
        <div class="level_header">
            <div class="level_topbar">
                <div class="level_topbar_place">
                    <i class="fas fa-map-marker"></i> 34 Dương Thưởng, Hòa Cường Bắc, Hải Châu, Đà Nẵng
                </div>

                <div class="level_topbar_media">
                    <div class="level_media_phone">
                        <i class="fas fa-phone"></i>
                        <span>0123456789</span>
                    </div>
                    <div class="level_media_fb">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="level_media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_insta">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="level_media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_twitter">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="level_media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_ytb">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="level_media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="level_header_main">
                <div class="level_header_inner">
                    <div class="level_header_logo">
                        <img class="level_header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
                    </div>

                    <div class="level_header_center">
                        <div class="level_header_search">
                            <input type="search" class="level_search_web" placeholder="Tìm kiếm">
                        </div>

                        <div class="level_header_search_logo">
                            <button class="level_search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="level_header_right">
                        <div class="level_cart">
                            <span class="level_cart_text">Giỏ Hàng</span>

                            <div class="level_cart_box">
                                <div class="level_logo_cart">0</div>
                            </div>
                         </div>
                         <div class="level_admin">
                             <div class="level_admin_icon">
                                <div class="list-icon-user-menu">
                                    <div style="display: flex;">
                                        <img width="30px" class="img-user" onclick="function_menu()" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwbGozsS9QP10p16rZiCrQD0koXVkI4c7LwUHab9dkmFRcN0VqCkB37f2y0EnySItwykg&usqp=CAU" alt="ảnh user">
                                        <span style="margin: 7% 0 0 10%;">ADMIN</span>
                                    </div>
                                    
                                            <div class="icon_noidung_menu_user" id="icon_noidung_menu_user">
                                                <a href="#" id="js-Thongtincanhan" > <i class="far fa-user" ></i> Thông tin cá nhân</a>
                                                <a href="#" id="js-quangtrithanhvien" > <i class="fa-solid fa-users"></i> Quản trị thành viên</a>
                                                <a href="#" id="js-quangtridonhang" > <i class="fa-solid fa-cubes"></i> Quản lý đơn hàng</a>
                                                <form class="logout__container"  action="logout_out.php" action="" method="POST">
                                                <button name="submit_logout"  class="submit_logout_css"> <i class="fas fa-sign-out-alt"></i> Đăng xuất</button>
                                                </form>
                                             </div>
                                                
                                </div>
                             </div>
                           
                        </div>
                    </div>

                </div>


            </div>
           
           

           
        </div>

        <div class="level_main_quantridonhang"> 
           
                <div  class="level_main_quantridonhang_left">
                        <div class="level_main_quantridonhang_left_top">
                            <img class="img_avata" src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2021/5/26/913299/Ngan-Ha25.jpg" alt="">
                        </div>
                        <div class="level_main_quantridonhang_left_bot_main">
                            <div class="level_main_quantridonhang_left_bot">
                                <p>Name : <span>Lâm</span></p>
                                <p>Địa chỉ giao hàng : <span>Thôn tân lộc , xã Mỹ Lộc , Huyện Phù Mỹ , tỉnh Bình ĐỊnh</span></p>
                                <div style="display: flex; margin-top: 2%;">
                                    <p><i class="fa-solid fa-envelope"></i> Email : <a href="mailto:lam@gmail.com">lam@gmail.com</a></p>
                                    <p> <i class="fa-solid fa-phone"></i> Phone : <a href="tel: 0123456789">0123456789</a></p>
                                </div>
                                <div class="icon_chitiet">
                                    <i class="fa-solid fa-angles-right" style="text-align: right; margin-left: 95%;"></i>
                                    <div class="level_main_quantridonhang_left_bot_chitiet">
                                            <button  class="qtridonhang_xemchitiet">Xem chi tiết</button>
                                        <!-- <ul>
                    
                                            <li class="qtridonhang_xemchitiet"><a href="">Xem chi tiết</a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                    
                </div>

                
           
        </div>
        <div class="level_main_quantridonhang_main">
            <div class="level_main_quantridonhang_main_lopphu">
                    <div class="level_main_quantridonhang_main_constrains">
                            <div class="level_main_quantridonhang_main_top_button">
                                    <button> Duyệt đơn</button>
                            </div>
                            <div class="level_main_quantridonhang_main_top">                                         
                                <div class="level_main_quantridonhang_main_left_top">                
                                        <h3> <span class="back_qtridonhang"> <i class="fa-solid fa-angles-left" ></i></span> Đơn hàng</h3>
                                        <h5>Vui lòng kiểm tra lại thông tin đơn hàng </h5>
                                </div>
                                <div class="level_main_quantridonhang_main_right_top">
                                    <ul class="progressbar">
                                        <li class="complete">Đơn đặt hàng</li>
                                        <li class="complete">Đơn hợp lệ</li>
                                        <li class="active">Kiểm tra thông tin đơn hàng</li>
                                        <li>Duyệt đơn</li>
                                    </ul>
                                </div>
                        </div>
                        <div class="level_main_quantridonhang_main_bot">
                                    <div class="level_main_quantridonhang_main_bot_left">
                                            <h3>Thông tin khách hàng</h3>
                                        <p style="color: blue;"><i class="fa-solid fa-user" style="color: blue;"></i>  Lâm </p> 
                                        <hr>
                                            <h4>ĐỊA CHỈ GIAO HÀNG</h4>
                                            <p>Thôn Tân Lộc , xã Mỹ Lộc , huyện Phù Mỹ , tỉnh Bình Định</p>
                                            <p>Phone : <span>0123456789</span> </p>
                                            <p>Email : <span>lam@gmail.com</span> </p>
                                            <a href="" style="color: blue;">Thay đổi thông tin giao hàng ?</a>
                                    </div>
                                    <div class="level_main_quantridonhang_main_bot_right">
                                        <h3>Thông tin đơn hàng</h3>
                                        <p><i class="fa-solid fa-cart-shopping"></i> SHOP </p>
                                        <hr>
                                        <div    class="level_main_quantridonhang_main_bot_right_hanghoa">
                                                    <div class="level_main_quantridonhang_main_bot_right_hanghoa_left">
                                                            <p>Tên sản phẩm:  </p>
                                                            <p>Số lượng: </p>
                                                            <p>Mã giả giá: </p>
                                                    </div>
                                                    <div class="level_main_quantridonhang_main_bot_right_hanghoa_right" >
                                                            <p> Iphone</p>
                                                            <p> 5</p>
                                                    </div>
                                        </div>
                                        <p class="st">Tổng hóa đơn :  <span>50.000.000</span></p>
                                    </div>
                        </div>
                    </div>
            </div>
        </div>
       
        <div class="level_main_quantrithanhvien">
            <div class="skw-pages">
                <div class="skw-page skw-page-1 active">
                  <div class="skw-page__half skw-page__half--left">
                    <div class="skw-page__skewed">
                      <div class="skw-page__content"></div>
                    </div>
                  </div>
                  <div class="skw-page__half skw-page__half--right">
                    <div class="skw-page__skewed">
                      <div class="skw-page__content">
                        <h2 class="skw-page__heading">SAY HI ADMIN</h2>
                        <p class="skw-page__description"><i class="fa-solid fa-users" style="margin-right: 5%; color: aliceblue;"></i>Welcome to the user management area</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="skw-page skw-page-2">
                  <div class="skw-page__half skw-page__half--right">
                    <div class="skw-page__skewed">
                              
                      <div class="skw-page__content1">
                            <div class="user">
                                    <div class="user_header">
                                                <h3>User management place</h3>
                                                <h5>where people connect together</h5>
                                    </div>
                                    <div class="user_header_margamen">
                                        <form action="" method="post">
                                            <input type="text" name="search" placeholder="Search..">
                                            <a class="sbutton"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            <select name="status" id="status" >
                                                    <option value="0">Trạng thái</option>
                                                        <option value="1">Hoạt động</option>
                                                        <option value="2">Tạm ngừng</option>
                                                        <option value="3">Ngừng hoạt động</option>
                                            </select> 
                                        </form>
                                    

                                    </div>
                                    <div class="User_as_user">
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="User_as_user">
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="user_main_constrain">
                                            <div class="user_main_constrain_header" style="display: flex;">
                                                  <p style="margin-right: -10%; margin-top: 6%;">Member</p>
                                                  <p class="acvititi" >Hoạt động</p>
                                            </div>
                                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                                            <div class="user_main_constrain_foot">
                                                    <p>ĐỖ VẠN LÂM</p>
                                                    <div style="background-color: rgb(231, 231, 231) ; padding: 3px ;">
                                                        <i style="margin-right: 10%;" class="fa-solid fa-user-graduate"></i>
                                                        <a href="" class="button_caidat_level"><i class="fa-solid fa-gear"></i></a>
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>                               
                                    <div class="pagination-wrapper">
                                            <svg class="btn btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                                              <path d="M0-.5h24v24H0z" fill="none"/>
                                            </svg>
                                            
                                            <div class="pagination-container">
                                              <div class="little-dot  little-dot--first"></div>
                                              <div class="little-dot">
                                                <div class="big-dot-container">
                                                  <div class="big-dot"></div>
                                                </div>
                                              </div>
                                              <div class="little-dot  little-dot--last"></div>
                                            </div>
                                            
                                            <svg class="btn btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                                              <path d="M0-.25h24v24H0z" fill="none"/>
                                            </svg>
                                    </div>
                                   

                                   
                                
                              </div>
                                  
                                
                                      
                               
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="skw-page skw-page-3">
                    <div class="skw-page__half skw-page__half--left">
                        <div class="skw-page__skewed">
                          <div class="skw-page__content"></div>
                        </div>
                      </div>
                  <div class="skw-page__half skw-page__half--right">
                    <div class="skw-page__skewed">
                      <div class="skw-page__content">
                          <div style="margin-bottom: 2%;">
                            <i class="fa-solid fa-lock" style="color: rgb(255, 0, 0);"></i>
                            <i class="fa-solid fa-shield-blank" style="color: rgb(255, 0, 0);"></i>
                            <i class="fa-solid fa-lock"style="color: rgb(255, 0, 0);"></i>
                          </div>
                       
                        <p class="skw-page__description" style="font-weight: bold;">Visit the system administrator</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="skw-page skw-page-4">
                  <div class="skw-page__half skw-page__half--left">
                    <div class="skw-page__skewed">
                      <div class="skw-page__content">
                        <h2 class="skw-page__heading">ADMIN</h2>
                        <p class="skw-page__description">The supreme administrator</p>
                      </div>
                    </div>
                  </div>
                  <div class="skw-page__half skw-page__half--right">
                    <div class="skw-page__skewed">
                      <div class="skw-page__content"></div>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>
        <div class="user_main_thongtinuser">
            <div class="user_main_thongtinuser_lopphu">
                 <div class="user_main_thongtinuser_constrain_bao" style="display: flex;">
                        <div class="user_main_thongtinuser_left">
                            <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
                        </div>
                        <div class="user_main_thongtinuser_right">
                                <div style="display: flex;">
                                    <h3 >Thông tin thành viên cơ bản </h3>
                                    <a class="close_user_level" href="" style="background-color: rgb(255, 255, 255); margin-top: 5%;  "><i class="fa-solid fa-xmark"></i></a>
                                </div>
                                <div >
                                    <div>
                                        <p>Họ và tên :  <span>ĐỖ VẠN LÂM</span></p>
                                    </div>
                                   <div>
                                          <p> Email:  <span>lam@gmail.com</span></p>
                                   </div>
                                    <div>
                                        <p>Phone: <span>0123456789</span></p>
                                    </div>
                                    
                                </div>
                              <form action="" method="post">
                                        <div style="display: flex;">
                                            <p style="margin-top: 10%; margin-right: 3%;">LEVEL HIỆN TẠI : </p>
                                            <input type="text" class="userlevel">
                                        </div>
                                        <button class="btn_save_level"> Lưu thay đổi</button>
                              </form>
                        </div>
                 </div>
            </div>
         </div>

         <div class="level_main_thongtincanhan">
            <div class="main__thongtin">
            
                    <div class="thongtincanhan_container_main">
                       
                        <div class="thongtincanhan_container_main_mid-LS">
                            <div class="thongtincanhan_container_main_mid_left-LS">
                                <form>
                                    <p><i class="fas fa-cog"></i> CÀI ĐẶT</p>
                                    <ul>
                                        <li><a href=""><i class="fas fa-address-card"></i>  Hồ sơ</a></li>
                                        <li><a href=""><input type="radio" name=""> Ảnh đại điện</a></li>
                                        <li><a href=""><input type="radio" name=""> Mật khẩu</a></li>
                                        <li><a href=""><input type="radio" name=""> Email</a></li>
                                    
                                        
                                    </ul>
                                </form>
                            </div>
                            
                            <div class="thongtincanhan_container_main_mid_right-LS">
                                <p>CHỈNH SỬA HỒ SƠ CỦA BẠN</p> <br> 
                                <form action="update_data.php" method="post" enctype="multipart/form-data">
                                    <div class="thongtincanhan_container_right_mid">
                                        <h3 style="font-size: 25px; font-weight: 500; margin-bottom: 1%;" > Thông tin cơ bản </h3>
                                            <hr>
                                        <div class="thongtincanhan_container_right_mid_top">
                                            <div class="thongtincanhan_container_right_mid_top_left">
                                                <h5>Giới thiệu để mọi người hiểu thêm về bạn. Một số thông tin sẽ được hiển thị công khai.</h5>
                                            </div>
                                            <div class="thongtincanhan_container_right_mid_top_right">
                                                <div class="thongtincanhan_container_right_mid_top_tenhienthi">
                                                    <label for="" class="thongtincanhan_container_right_mid_top_right_chu" > Tên hiển thị</label>
                                                    <br><input type="text" name="txtTenhienthi" class="frames" placeholder="Tên hiển thị" value="<?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Tenhienthi"];}    ?>">
                                                </div>
                                                <div class="thongtincanhan_container_right_mid_top_ngaysinh">
                                                        <label for="" class="thongtincanhan_container_right_mid_top_right_chu">Ngày sinh</label>
                                                        <br><input type="date"class="frames" name="txtNgaysinh" id="" placeholder="<?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Ngaysinh"];}    ?>">
                                                </div>
                                                <div class="thongtincanhan_container_right_mid_top_gioitinh">
                                                    <label for=""class="thongtincanhan_container_right_mid_top_right_chu"> Giới tính</label>
                                                    <br> <select name="Gender" id=""class="frames"  value="">
                                                            <option ><?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Gioitinh"];} else{ echo "Giới tính";}     ?></option>
                                                            <option   value="Khong xac dinh"> Không xác định </option>
                                                            <option value="Nam">Nam</option>
                                                            <option value="Nữ">Nữ</option>
                                                            <option value="Khác">Khác</option>
                                                    </select>
                                                </div>
                                                <div class="thongtincanhan_container_right_mid_top_nghenghiep">
                                                        <label for="" class="thongtincanhan_container_right_mid_top_right_chu">Nghề nghiệp</label>
                                                        <br><textarea  class="frames" name="txtNghenghiep" id="" cols="30" rows="10" placeholder="Nghề nghiệp"> <?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Nghenghiep"];} else{ echo "....";} ?></textarea>
                                                </div>
                                                <div class="thongtincanhan_container_right_mid_top_chuyenmon">
                                                    <label for=""class="thongtincanhan_container_right_mid_top_right_chu">Kỹ năng chuyên môn</label>
                                                    <br><textarea  class="frames" name="txtChuyenmon" id="" cols="30" rows="10"  placeholder="Kỹ năng chuyên môn"><?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Kynangchuyenmon"];} else{ echo "....";}     ?></textarea>
                                            </div>
                                            <div class="thongtincanhan_container_right_mid_top_anhdaidien">
                                                <div id="direct_upload" class="min-height-150 d-flex border border-2x border-black-op mb-20">
                                                    <label for="" class="thongtincanhan_container_right_mid_top_right_chu">Ảnh đại diện</label>
                                                    <br>  
                                                    <span class="thongtincanhan_img-div">
                                                               
                                                                <div class="text-center img-placeholder"  onClick="triggerClick()">
                                                                   
                                                                </div>
                                                                
                                                                
                                                            <img  class="img-user" src="https://code.itptit.com/assets/images/avatar-none.jpeg" onClick="triggerClick()" id="profileDisplay">
                                                            </span>
                                                            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                                                        </div>
                                                    
                                                        
                                            </div>
                                          
                                            <div class="thongtincanhan_container_right_mid_top_anhdaidien">
                                                <label for="" class="thongtincanhan_container_right_mid_top_right_chu" style="margin-top: 2%;">Về tôi</label>
                                                <br><textarea  name="editor" class="ckeditor" id="editor" placeholder="Về tôi"><?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Vetoi"];} else{ echo "....";}     ?></textarea>
                                                    <script>
                                                        // CKEditor.replace('editor');
                                                    </script>
                                            </div>
                                            </div>
                                        </div>
                                        <h3 style="font-size: 25px; font-weight: 500; margin-bottom: 1%; margin-top: 2%;" > Thông tin liên hệ </h3>
                                        <hr>
                                        <div  class=" thongtincanhan_container_right_mid_bot">
                                        
                                                    <div  class=" thongtincanhan_container_right_mid_bot_left">
                                                            <h5>Thông tin để mọi người có thể liên lạc với bạn khi cần.</h5>
                                                    </div>
                                                    <div class=" thongtincanhan_container_right_mid_bot_right">
                                                            <div  class=" thongtincanhan_container_right_mid_bot_right_sodienthoai">
                                                                    <label for=""  class="thongtincanhan_container_right_mid_bot_right_chu">Số điện thoại</label>
                                                                    <br><input type="text" class="frames"  name="txtSodienthoai" id=""placeholder="Số điện thoại" value=" <?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Sodienthoai"];} else{ echo "Số điện thoại";}     ?>">
                                                            </div>
                                                            <div  class=" thongtincanhan_container_right_mid_bot_right_diachi">
                                                                <label for="" class="thongtincanhan_container_right_mid_bot_right_chu" >Địa chỉ</label>
                                                                <br><input type="text"  class="frames" name="txtDiachi" id=""  placeholder="Địa chỉ" value=" <?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Diachi"];} else{ echo "Địa chỉ";}     ?>">
                                                        </div>
                                                        <div  class=" thongtincanhan_container_right_mid_bot_right_website">
                                                            <label for="" class="thongtincanhan_container_right_mid_bot_right_chu"  >Website</label>
                                                            <br>
                                                            <div class="Thongtincanhan_containner_right_mid_bot_iconnnn">
                                                                <span class="input-group-text">
                                                                    <i class="fas fa-link"></i>
                                                                    </span>
                                                                <input type="text"  class="frames" name="txtWebsite" id="" placeholder="Website" value="<?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Website"];} else{ echo "Website";}     ?>">
                                                            </div>
                                                        </div>
                                                    <div  class=" thongtincanhan_container_right_mid_bot_right_facebook" >
                                                        <label for="" class="thongtincanhan_container_right_mid_bot_right_chu"   >Facebook</label>
                                                        <br>
                                                            <div style="display: flex;">
                                                                <span class="input-group-text">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                    </span>
                                                                <input type="text"  class="frames" name="txtFacebook" id=""  placeholder="Facebook" value="<?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Facebook"];} else{ echo "Facebook";}     ?>"> 
                                                            </div>
                                                    </div>
                                                    <div  class=" thongtincanhan_container_right_mid_bot_right_email">
                                                        <label for="" class="thongtincanhan_container_right_mid_bot_right_chu" >Email</label>
                                                        <br><div  style="display: flex;" >
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-envelope"></i>
                                                                        </span>
                                                                    <input type="text"  class="frames" name="txtEmail" id="" placeholder="Email" value="<?php   if(   mysqli_num_rows($resultt) > 0 ) {       echo $roww["Email"];} else{ echo "Email";}     ?>"> 
                                                        </div>
                                                </div>
                                                
                                        </div>
                                        

                                    </div>
                                    <button id="btn_savethongtin" name="submit_savethongtin" class="button">
                                        <i class="fas fa-save"></i>  Lưu thay dổi
                                        </button>

                                </form>
                            </div>
                        </div>

                    

                    </div>     
                
            </div>

        </div>
        
        
        <script>
                const  xemchitiet =  document.querySelector(".qtridonhang_xemchitiet");

                const donhang =  document.querySelector(".level_main_quantridonhang_main");
                const back =  document.querySelector(".back_qtridonhang");
                const Maindonhang =  document.querySelector(".level_main_quantridonhang");
                const cuchang = document.querySelector(".level_main_quantridonhang_left");
              
                xemchitiet.addEventListener('click', function (){
                    donhang.classList.add('is-show');
                    Maindonhang.classList.remove('is-show');
                    
                })
                back.addEventListener('click' , function(){
                    donhang.classList.remove('is-show');
                    Maindonhang.classList.add('is-show');
                })

        </script>
        <script>
                const caidat =  document.querySelectorAll(".button_caidat_level");

                const  thongtinuser= document.querySelector(".user_main_thongtinuser");
                const Mainquangtrithanhvien = document.querySelector(".skw-pages")
                const closelevel = document.querySelector(".close_user_level")
                closelevel.addEventListener('click' , function(){
                    thongtinuser.classList.remove('is-show');
                    
                })


        </script>
        <script>
                    const JSthongtincanhan = document.getElementById("js-Thongtincanhan")
                    const JSquangtrithanhvien = document.getElementById("js-quangtrithanhvien")
                    const JSquangtridonhang = document.getElementById("js-quangtridonhang")
                    
                    const thongtincanhan = document.querySelector(".level_main_thongtincanhan")
                    const quangtrithanhvien = document.querySelector(".level_main_quantrithanhvien")
                    const quangtridonhang = document.querySelector(".level_main_quantridonhang")
                    const Mainqtridonhang = document.querySelector(".level_main_quantridonhang_main")
                    
                    
                    JSthongtincanhan.onclick = function(){
                        Block(thongtincanhan);
                        None(quangtridonhang);
                        None(quangtrithanhvien);
                        None(Mainqtridonhang);

                        cssbgr(JSthongtincanhan);
                        nocss(JSquangtrithanhvien);
                        nocss(JSquangtridonhang);
                    }
                    JSquangtrithanhvien.onclick = function(){
                        None(thongtincanhan);
                        Block(quangtrithanhvien);
                        None(quangtridonhang);
                        None(Mainqtridonhang);

                        
                        nocss(JSthongtincanhan);
                        cssbgr(JSquangtrithanhvien);
                        nocss(JSquangtridonhang);
                    }
                    JSquangtridonhang.onclick =function(){
                        None(thongtincanhan);
                        None(quangtrithanhvien);
                        Block(quangtridonhang);
                        None(Mainqtridonhang);

                        
                        nocss(JSthongtincanhan);
                        nocss(JSquangtrithanhvien);
                        cssbgr(JSquangtridonhang);
                    }

                    function nocss(e) {
                        e.style.backgroundColor = '#FFF';
                        e.style.borderLeft = 'none';
                        e.style.color = ' #959a9e';
                    }

                function cssbgr(e) {
                    e.style.backgroundColor = '#2d3238';
                    e.style.borderLeft = '3px solid#4095da';
                    e.style.color = '#4095da';
                }

                    
                    function Block(e) {
                        e.classList.add('is-show');
                    }
                    function None(e) {
                        e.classList.remove('is-show');
                    }
        </script>
       
               
    </body>
    </html>