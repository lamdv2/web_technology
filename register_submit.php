<?php
    include 'config.php';
    if( isset($_POST['submit']))
    {
        $username = $_POST['name'];
        $username = trim(preg_replace('/\s+/',' ', $username));
        $email = $_POST['Email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $level = 0;

        if($password!=$repassword){
            echo "<script language='javascript'>alert('Sai password xác nhận');";
            echo " location.href='index.php';</script>";
            die();
        }

        $sql = "select * from user where username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);

        if(mysqli_num_rows($old) > 0){
            echo "<script language='javascript'>alert('Tên người dùng đã tồn tại!');";
            echo " location.href='index.php';</script>";
            die();
        }

        $sql = "insert into user (username, email,phone, password, level) values('$username', '$email','$phone','$password','$level')";
        mysqli_query($conn, $sql);

        $username = preg_replace('/\s+/', '', $username);
      


        echo "<script language='javascript'>alert('Đã đăng ký thành công!');";
        echo " location.href='index.php';</script>";
    }

    if(isset($_POST['btnDangNhap'])){
        echo "<script language='javascript'>alert('Đăng ký không thành công!');";
        echo "alert('Bạn đã bấm nhầm vào Đăng Nhập');";
        echo " location.href='index.php';</script>";
    }

?>