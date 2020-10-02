<?php
    $one =$_POST['numberone'];
    $two =$_POST['numbertwo'];
    include 'thu_vien_1.php';
    $cong = new cabulary($one,$two);
   $soB=new cabulary($one,$two);
   echo $soB ->soA.'<br>';

    $list = $_POST['list'];
    if($list =='cong')
    {
        echo $cong->cong();
    }
    else if($list == 'tru')
    {
        echo $cong->tru();
    }
    else if($list == 'nhan' )
    {
        echo $cong -> nhan();
    }
    else {
        echo $cong ->chia();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Máy Tính</legend>
        
            <div class="form-group">
                <label for="">Số thứ nhất</label>
                <input type="text" class="form-control" name="numberone" value="<?php if(isset($one)) echo $one?>" placeholder="Input field">

                <label for="">Số thứ hai</label>
                <input type="text" class="form-control" name="numbertwo" value="<?php if(isset($two)) echo $two?>" placeholder="Input field">

                
                <div class="radio">
                    <label>
                        <input type="radio" name="list" id="input" value="cong" checked="checked">
                        Cộng
                       
                    </label>
                    <div class="radio">
                    <label>
                       
                        <input type="radio" name="list" id="input" value="tru" checked="checked">
                        Trừ
                    </label>
                    <label>
                        <input type="radio" name="list" id="input" value="nhan" checked="checked">
                        Nhân
                       
                    </label>
                    <div class="radio">
                    <label>
                       
                        <input type="radio" name="list" id="input" value="chia" checked="checked">
                        Chia
                    </label>
                </div>
                

            </div>
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>
</html>