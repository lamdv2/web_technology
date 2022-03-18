
<?php 
        session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
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
                            <span class="cart_text">Giỏ Hàng</span>

                            <div class="cart_box">
                                <div class="logo_cart">0</div>
                            </div>
                        </div>

                        <div class="header_signin">
                            <button class="btn_login js-btn-register" >Đăng Ký</button>
                        </div>

                        <div class="header_login">
                            <button class="btn_login js-btn-login">Đăng Nhập</button>
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
            <div class="main_slide"></div>
        </div>

        <div class="footer">

        </div>
    </div>
    <div class="model_login_register">
        <div class="model_login_register_lopphu">
                <div class="model_register_main">
            
                    <div class="form-register js-form-register">
                        <form action="register_submit.php" method="POST" class="register-container" id="form-register">
                                <div class="register_icon">
                                    <i class="fa-solid fa-book-tanakh"></i>
                                </div>
                                
                                <div class="register_body">
                                        <div class="register_body_main">
                                            <header class="register_header">
                                                Đăng ký
                                        </header>
                                            <div class="form_group"  >                                           
                                                        <label for="name" class="register_label">
                                                            Username : 
                                                        </label>   
                                                                                                            
                                                        <input type="text" name="name" id="name" required placeholder="Username" class="register_input" >
                                                        <span class="form-messege"></span>
                                                
                                                    
                                            </div>
                                            <div class="form_group">
                                                    <label for="Email" class="register_label"> Email :</label>
                                                    <input type="text" name="Email" id="Email" required  placeholder="Email" class="register_input">
                                                    <span class="form-messege"></span>
                                            </div>
                                            <div class="form_group">
                                                <label for="phone" class="register_label" >Phone number : </label>
                                                <input type="text" name="phone" id="phone" required placeholder="Phone number" class="register_input">
                                                <span class="form-messege"></span>
                                            </div>
                                            <div class="form_group"> 
                                                    <label for="password" class="register_label" >Mật khẩu : </label>
                                                    <input type="password" name="password" id="password" required placeholder="Password" class="register_input">
                                                    <span class="form-messege"></span>
                                            </div>
                                            <div class="form_group">
                                                    <label for="repassword" class="register_label">Nhập lại <br> mật khẩu : </label>
                                                    <input type="password" name="repassword" id="repassword" required placeholder="Retype password" class="register_input">
                                            </div>
                                        
                                            <button id="register_btn" name="submit" >
                                                Register
                                            </button>
                                            <div class="register_text"> <p>Hoặc đăng ký bằng </p> </div>
                                            <div class="register_icon">
                                                <a href=""><i class="fa-brands fa-facebook-square icon"  ><span> Facebook</span> </i></a> 
                                                <a href=""><i class="fa-brands fa-google  icon"><span> Google</span> </i></a>    
                                                <a href=""> <i class="fa-brands fa-github icon"><span> Github</span></i> </a>
                                            </div>
                                        
                                        </div>
        
                                </div>
                                
                        </form>
                    </div>
        
                    
            </div>
            <div class="model_login_main">
            
                    <div class="form-login js-form-login">
                        <form class="login_container"   method="POST" action="login_submit.php">
                            <header class="login-header">
                                Đăng nhập
                            </header>
                
                            <div class="login-body">
                                <div class="form_group_login">
                                    <label for="name"class="login-label">
                                        Username
                                    </label>
                                    <input type="text" id="name" class="login-input" required  name="username" placeholder="Username">
                                </div>
                                
                                <div class="form_group_login" >
                                    <label for="matkhau" class="login-label">
                                        Mật khẩu
                                    </label>
                                    <input type="password" id="matkhau" class="login-input" required name="password" placeholder="Uassword">
                                </div>
                                <div class="form_group_text">
                                    <div style="float: left; color: aliceblue;"> <input type="checkbox" name="rememberme" id="rememberme" value="Remember me"> Remember me</div>
                                    <div class="text-wning"> <p ><a href="">Quên mật khẩu?</a></p></div>
                                
                                </div>
                
                                <button class="login-btn" id="login-btn" name="submit_login">
                                    Đăng nhập
                                </button>

                                <div class="login-footer" style="color: aliceblue;">
                                        <p>To Negister New Account <i class="fa-solid fa-arrow-right-long"></i> </p>
                                        <button class="btn_chuyen_register">  CLIKE HERE</button>
                                </div>
                            </div>
                            
                        
                            
                                
                        
                        </form>
        
                    </div>
            </div>

        </div>        
        
       

    </div>
    <script src="./assets/js/media.js"></script>
    <script src="./assets/js/validator.js"></script>
    <script>

        Validator({
            form: '#form_register',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequied("#name", 'Vui lòng nhập tên đẩy đủ của bạn'),
                Validator.isRequied("#email"),
                Validator.minLenght("#phone",10),
                Validator.isEmail("#email"),
                Validator.minLenght("#password",6),
                Validator.isRequied("#repassword"),
                Validator.isConfirmed("#repassword", function(){
                    return document.querySelector('#form_register #password').value;
                }, 'Mật khẩu nhập lại không chính xác'),

            ],

            onsubmit: function(data){

            }

        });
    </script>
    <script>
        const all = document.querySelector(".all");
        const lopphu =  document.querySelector(".model_login_register_lopphu");
            const loginregister = document.querySelector(".model_login_register");
            const FormLogin = document.querySelector(".model_login_main");
        const FormRegister = document.querySelector(".model_register_main");
             const LoginContainer = document.querySelector('.login_container');
        const RegisterContainer = document.querySelector('.register-container');
        const LoginBtn = document.querySelector('.js-btn-login');
        const RegisterBtn = document.querySelector('.js-btn-register');


            //     // đky 
            //     LoginBtn.onclick = function (){
            //         Block(loginregister);
            //         Block(FormLogin);
            //         Block(lopphu);
            //     }

            // RegisterBtn.onclick =function(){
            //     Block(loginregister);
            //     Block(FormRegister);
            //     Block(lopphu);
            // }

                LoginBtn.addEventListener('click', function showFormlogin(){
                    loginregister.classList.add('is-show');
                    lopphu.classList.add('is-show');
                    FormLogin.classList.add('is-show');
                })

                RegisterBtn.addEventListener('click', function showFormRegister(){
                    loginregister.classList.add('is-show');
                    lopphu.classList.add('is-show');
                    FormRegister.classList.add('is-show');
                })
                
                
                function hideFormLogin(){
                        FormLogin.classList.remove('is-show');
                        lopphu.classList.remove('is-show');
                        loginregister.classList.remove('is-show');
                    }
                 function hideFormRegister(){
                        FormRegister.classList.remove('is-show');
                        lopphu.classList.remove('is-show');
                        loginregister.classList.remove('is-show');
                    }
                LoginContainer.addEventListener('click', function(event){
                     event.stopPropagation()
                 })
                 RegisterContainer.addEventListener('click', function(e){
                        e.stopPropagation()
                    })
                    

                
                  lopphu.addEventListener('click', hideFormLogin) //Click Khoảng không
                  lopphu.addEventListener('click', hideFormRegister) //Click Khoảng không
                  
                    function Block(e) {
                        e.classList.add('is-show');
                    }
                    function None(e) {
                        e.classList.remove('is-show');
                    }
    </script>

</body>

</html>