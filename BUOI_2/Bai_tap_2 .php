<?php


if(isset($_POST["submit"]))
{
    print_r ($_POST);
    $chuoi = $_POST['nhapvao'];
    $mang=explode(' ',$chuoi);
   
    $n=count($mang);
    $ho = $mang[0];
    $ten=$mang[$n -1];
    unset($mang[0]);//ham coa vi tri duoc chi dinh
    array_pop($mang);//ham cat bo vi tri cuoi trong mang
    print_r($mang);
    $giua=implode(' ',$mang);
//echo $len;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập và tính trên dãy số</title>
    
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Tách họ tên</legend>
        
            <div class="form-group">
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">FULL NAME </label>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">HỌ  </label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">TÊN GIỮA  </label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">TÊN </label>
                    </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control" name="nhapvao" value ="<?php if(isset($_POST["nhapvao"]) == true) echo $_POST["nhapvao"];?>" placeholder="Nhập dãy số">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control" value="<?php   if(isset($ho) == true) echo $ho?>" placeholder="Kết quả">
                </div>
                   
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control" value="<?php if(isset($giua)) echo $giua?>"  placeholder="Nhập dãy số">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control" value="<?php if(isset($ten)) echo $ten?>" placeholder="Kết quả">
                </div>
              
           
            </div>
        
            
        
            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
        
    </div>
    <img src="con_giap.jpg" alt="">
</body>
</html>