<?php 
    require("ketNoiDatabase.php");
    $masp =(int) $_GET['id'];
    $sql = "SELECT * FROM `sanpham` WHERE `masp` = '$masp'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $img = $row['imgURL'];

    if(isset($_POST['submit'])){
        $tensp = $_POST['ten'];
        $loaisp = $_POST['loai'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $target_dir = "../images/";
        if($hinhanh){
            if (file_exists("../images/".$img)) {
                unlink("../images/".$img);
            } 
            $target_file = $target_dir.$hinhanh ;
        }else{
            $target_file = $target_dir.$img ;
            $hinhanh = $img;
        }

        function clean($string) {
            $string = str_replace(["'",'"'], ["\'",'\"'], $string); // Replaces all spaces with hyphens.
         
            return $string;
        }

        $tensp = clean($tensp);
        $loaisp = clean($loaisp);
        $gia = clean($gia);
        $mota = clean($mota);

        
        if(isset($tensp) && isset($loaisp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
            mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
            
            $sql = "UPDATE `sanpham` SET `tensp` =  '$tensp', `loaisp` =  '$loaisp',`gia` =  '$gia',
            `mota` = '$mota', `imgURL` = '$hinhanh'
            WHERE `sanpham`.`masp` = '$masp';";
            
            mysqli_query($conn, $sql);
            
            echo "<script>alert('bạn đã cập nhật thành công')</script>";
            header("Location:trangchu.php");
            
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 600px;
        }
        div{
            display: flex;
            margin-bottom: 20px;
        }
        label{
            width: 100px;
        }
        input,textarea{
            flex: 1;
        }
        button{
            margin-left: 100px;
            padding: 6px 12px;
            color: #2F1C25;
            background-color: transparent;
            border: 3px solid #D7B0DF;
            border-radius:8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="trangchu.php">Quay về </a>
    <h1>Cập nhật sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="ten">Tên sản phẩm</label>
            <input type="text" id='ten' name="ten" value="<?= $row["tensp"]?>">
        </div>
        <div>
            <label for="loai">loại sản phẩm</label>
            <input type="text" id='loai' name="loai" value="<?= $row["loaisp"]?>" >
        </div>
        <div>
            <label for="gia">Giá sản phẩm</label>
            <input type="number" id='gia' name="gia"  value="<?= $row["gia"]?>">
        </div>
        <div>
            <img style="width:200px;height: 200px;" src='../images/<?= $row["imgURL"]?>' alt="">
        </div>
        <div>
            <label for="file">Hình ảnh </label>
            <input type="file"  id="file" name="hinhanh" value="Choose File">
        </div>
        <div>
            <label for="mota">Mô tả </label>
            <textarea name="mota" id='mota'  cols="30" rows="10"><?= $row["mota"]?></textarea>
        </div>
        <button type="submit" name="submit">
        Cập nhật sản phẩm
        </button>  
    </form>
</body>
</html>
