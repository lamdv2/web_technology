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
</head>
<body>
    <label for="">Tỉnh</label>
    <select name="province" id="province">
        <option value="">--Chọn Tỉnh---</option>
            <?php
                require("connet.php");
                $sql = "SELECT * FROM province";
                $query = mysqli_query($conn , $sql);
                $num =  mysqli_num_rows ($query);
                if($num > 0){
                    while($row = mysqli_fetch_array($query)){
                   
            ?>
            <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
            <?php
                    }
                }
            ?>
    </select>
    <label for="">Quận/Huyện</label>
    <select name="district" id="district">
        <option value=""></option>
    </select>id_provincial
    <label for="">Phường/Xã</label>
    <select name="ward" id="ward">
        <option value=""></option>
    </select>
</body>
</html>