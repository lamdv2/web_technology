<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main/css/pay.css">
    <link rel="stylesheet" href="./ajax.js">
</head>
<body>
    <div class="all-pay">
        <div class="pay-left">
            <h1>THÔNG TIN TÀI KHOẢN</h1>
            <div  class="body-pay-left">
                <div class="nguoinhan">
                    <span>Tên người nhận:</span>
                    <span>Trần Cường</span>
                </div>
                <div class="SDT-ND">
                    <span>Số điện thoại</span>
                    <input type="text" name="SDT-kh" id="SDT-kh">
                </div>
                <div class="diachikh">
                    <span>Địa Chỉ Khách Hàng</span>
                    <select name="province" id="province" class="province">
                        <option value="">--Chọn Tỉnh---</option>
                            <?php
                                require("connet.php");
                                $sql = "SELECT * FROM province";
                                $query = mysqli_query($conn , $sql);
                                $num =  mysqli_num_rows ($query);
                                if($num > 0){
                                    while($row = mysqli_fetch_array($query)){
                            
                        ?>
                        <option value="<?php echo $row['provinceid']?>"><?php echo $row['name']?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    <div>
                        <select name="calc_shipping_district" id="huyen" class="huyen" >
                            <option value="0" > -- Chọn Huyện--</option>
                        
                        </select>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="pay-right">

        </div>
    </div>
    
</body>

</html>