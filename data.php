<?php 
    require("connet.php");
    $key = $_POST["id"];
    $sql = "select * from district where provinceid = '$key'";
    $query = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($query);
    if($num > 0){
        while($row = mysqli_fetch_array($query)){

     
?>

    <option value="<?php echo $row['districtid']?>"><?php echo $row['name']?></option>;
    <?php
        }
            }
?>