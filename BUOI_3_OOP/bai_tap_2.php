<?php
    include 'thu_vien_2.php';

    if(isset($_POST['name'])&&isset($_POST['link'])&&isset($_POST['note'])&&isset($_POST['width'])&&isset($_POST['height'])&&isset($_POST['vien'])&&isset($_POST['le']))
    {
        $name= $_POST['name'];$link=$_POST['link'];$note = $_POST['note'];$width = $_POST['width'];$height = $_POST['height'];$vien= $_POST['vien'];$le=$_POST['le'];

        $hinh1 =new image($name,$link,$note,$width,$height,$vien,$le);
   
       
    }
   

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xuat hinh anh</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Hiển thị hình ảnh</legend>
        
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control" name="name" value="<?php if(isset($name)) echo $_POST['name']?>" placeholder="Input field">

                <label for="">Đường dẫn</label>
                <input type="text" class="form-control" name="link" value="<?php if(isset($link)) echo $link?>" placeholder="Input field">

                <label for="">Ghi chú</label>
                <input type="text" class="form-control" name="note" value="<?php if(isset($note)) echo $note?>" placeholder="Input field">
                
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="">Chiều Rộng</label>
                <input type="text" class="form-control" name="width" value="<?php if(isset($width)) echo $width?>" placeholder="Input field">

                <label for="">Chiều Cao</label>
                <input type="text" class="form-control" name="height" value="<?php if(isset($height)) echo $height?>" placeholder="Input field">
 
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="">Đường viền</label>
                <input type="text" class="form-control" name="vien" value="<?php if(isset($vien)) echo $vien?>" placeholder="Input field">

                <label for="">Canh lề</label>
                <input type="text" class="form-control" name="le" value="<?php if(isset($le)) echo $le?>" placeholder="Input field">

                    </div>
                
            </div>
        
            
        
            <button type="submit" name="sm" class="btn btn-primary">Submit</button>
        </form>

        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><div><?php if(isset($note)) echo  $hinh1 ->tieu_de;?></div></h2>
            
            
            <img src="<?php if(isset($link)) echo $hinh1 ->duon_dan ?>" title="<?php if(isset($note)) echo $note?>" height="<?php echo $hinh1->chieu_cao?>" style="width:<?php if(isset($width)) echo $width?> ;border:<?php if(isset($vien)) echo $vien?> ;margin:<?php if(isset($le)) echo $le?>">
          
        </div>
        
        
    </div>
</body>
</html>