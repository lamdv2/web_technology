<?php 
        require("config.php");
        require("login_submit.php");
        $Tenhienthi = $_POST['txtTenhienthi'];
        $Ngaysinh=  $_POST['txtNgaysinh'];
        $Gioitinh=  $_POST['Gender'];
        $Nghenghiep=  $_POST['txtNghenghiep'];
        $Chuyenmon=  $_POST['txtChuyenmon'];
        $profileImageName =   $_FILES["profileImage"]["name"];
        // For image upload
     
        $target_dir = "images/";
        $target_file = $target_dir . basename($profileImageName);


         $Vetoi=  $_POST['editor'];
         $Vetoiii = preg_replace('/(<\/?h1>)/', '', $Vetoi);
          $Sodienthoai=  $_POST['txtSodienthoai'];
          $Diachi=  $_POST['txtDiachi'];
          $Website=  $_POST['txtWebsite'];
          $facebook=  $_POST['txtFacebook'];
          $Email=  $_POST['txtEmail'];
          $msg = "";
          $msg_class = "";
          

        
        


          $sql = "select * from user";
          $result=mysqli_query($conn , $sql);
            $row = mysqli_fetch_assoc($result);

     
        if ($row < 1) {
                if(isset($_POST['submit_savethongtin'])){
                   
                        $sql = "insert into $user(Tenhienthi,  Ngaysinh,Gioitinh, Nghenghiep ,Kynangchuyenmon,Anhdaidien,Vetoi,Sodienthoai ,Diachi,Website,Facebook,Email)    
                        value( '$Tenhienthi',   '$Ngaysinh' ,'$Gioitinh' ,   '$Nghenghiep' ,'$Chuyenmon',   '$profileImageName' ,   '$Vetoi' , '$Sodienthoai' ,  '$Diachi',   '$Website' ,   '$facebook' ,  '$Email'  )";
                        $result=mysqli_query( $conn, $sql);
    
                       
                    }
                
                if($result){
                    mysqli_close($conn);
                    echo "<script language='javascript'>alert('Thêm thông tin lần đầu  thành công!');location.href='level.php';";
                    echo "</script>";
                }
                else{
                    echo "Update Thất bại!!! "  . mysqli_error($conn);
                    
                }


         }
         else{
            
            if(isset($_POST['submit_savethongtin'])){
                
                    $sql = "update $user set Tenhienthi = '$Tenhienthi',  Gioitinh = '$Gioitinh' , Nghenghiep = '$Nghenghiep' ,
                    Kynangchuyenmon = '$Chuyenmon', Anhdaidien = '$profileImageName' , Vetoi = '$Vetoi' ,
                    Sodienthoai = $Sodienthoai ,Diachi = '$Diachi', Website = '$Website' , Facebook = '$facebook' ,Email = '$Email'  " ;
                    $result=mysqli_query( $conn, $sql);
                
                
                }
                if($result){
                    mysqli_close($conn);
                    echo "<script language='javascript'>alert('Update dữ liệu thành công!');location.href='level.php';";
                    echo "</script>";
                }
                else{
                    echo "Update Thất bại!!! "  . mysqli_error($conn);
                    
                }
         }
       



?>