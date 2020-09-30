<?php
    $travel = array( 
        array('Dia_diem' => 'Thành Phố Đà Lạc','img'=>'tải xuống.jpg'),
        array('Dia_diem'=> 'Thành Phố Hồ Chí Mnh','img'=>'tp.hcm.jpg'),
        array('Dia_diem'=>'Thành phố Nha Trang','img'=>'nhatrang.jpg'),
    );

    $id_DL=0;
    if(isset($_GET['id']))
    {
        $id_DL = $_GET['id'];
     
    }
 
    echo $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh lam tham canh</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     
</head>
<body>
   
    <div class="container">
        
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <?php 
                foreach($travel as $key => $dulich)
                {
            ?>
            <div class="danh_muc">
            <a href="?id=<?php echo $key?>">
                <?php
                    echo $dulich['Dia_diem'];
                ?>
            </a>
            </div>

                <?php }?>
        </div>
        
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

        <img src="<?php echo $travel[$id_DL]['img']?>" alt="">
         <a href="?id=<?php echo 0?>" name="back"> Quay lai trang dau
      
         </a>
        </div>
         
    </div>
    
</body>
</html>