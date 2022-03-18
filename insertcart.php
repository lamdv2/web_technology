<?php 
    require('connect.php');
    

    $idcart = $_GET["key"];
    $sqll = "select * from product where idProduct = $idcart";
    $result = mysqli_query($conn , $sqll);
    $row = mysqli_fetch_assoc($result);
    $idproduct  = $row['idProduct'];
    $id = $row['id'];
    $idimg = $row['imgProduct'];
    $gia = $row['gia'];
    $giaSale = $row['giaSale'];
    $quantity = $row['quantity'];
    $loaiSP = $row['loaiSP'];
    $tenSp = $row['tenSp'];
    $property = $row['property'];
    $hang = $row['hang'];
    $sql = " insert into cart (idProduct,id,imgProduct,gia,giaSale,quantity,loaiSP,tenSp,property,hang) 
    value ($idproduct,$id,'$idimg','$gia','$giaSale',$quantity,'$loaiSP','$tenSp','$property','$hang')";
    if(mysqli_query($conn, $sql))
    {
    echo "<script language='javascript'>alert('thêm vào cart thành công');";
    echo "location.href='cart.php';</script>";
    }
    ?>
?>
	