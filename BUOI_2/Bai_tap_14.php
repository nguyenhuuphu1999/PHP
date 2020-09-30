<?php
    $mang_DV=array(
        array('ten_dong_vat'=>'con_ho','mota'=>'Hổ (Panthera tigris), còn gọi là cọp,hùm,, ông 30, khái là một loài động vật có vú thuộc Họ Mèo (Felidae), và là một trong năm loài "mèo lớn" thuộc chi Panthera.[4] Hổ là một loài thú ăn thịt, chúng dễ nhận biết nhất bởi các sọc vằn dọc sẫm màu trên bộ lông màu đỏ cam với phần bụng trắng. Hổ là loài lớn nhất trong họ Mèo và là động vật lớn thứ 3 trong các loài thú ăn thịt (sau gấu Bắc Cực và gấu nâu). Hổ là một trong những loài động vật có biểu tượng lôi cuốn và dễ nhận biết nhất trên thế giới. Chúng nổi bật trong thần thoại và văn hóa dân gian cổ đại, tiếp tục được miêu tả trong các bộ phim và văn học hiện đại, xuất hiện trên nhiều lá cờ, phù hiệu áo giáp và làm linh vật cho các đội tuyển thể thao. Đặc biệt trong văn hóa phương Đông, hổ được mệnh danh là "chúa sơn lâm". Do đó, chúng là biểu tượng quốc gia của nhiều nước như Ấn Độ, Bangladesh, Malaysia và Hàn Quốc.'),
        array('ten_dong_vat'=>'con_ga','mota'=>'Gà hay gà nhà, kê là một loài chim đã được con người thuần hoá cách đây hàng nghìn năm. Một số ý kiến cho rằng loài này có thuỷ tổ từ loài chim hoang dã ở Ấn Độ và loài gà rừng lông đỏ nhiệt đới ở vùng Đông Nam Á. Trong thế giới loài chim, gà là loài vật có số lượng áp đảo nhất với 24 tỉ cá thể.'),
        array('ten_dong_vat'=>'con_de','mota'=>'Capra aegagrus hircus là một loài động vật có vú trong họ Bovidae, bộ Artiodactyla. Loài này được Linnaeus mô tả năm 1758.'),
    );
   $id_CV = 1;

    if(isset($_GET['id_DV']))
    {
        $id_CV = $_GET['id_DV'];
        echo $_GET['id_DV'];
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
    
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="list_animal">
            <h2>Danh sách động vật</h2>
        </div>

    <?php
        foreach($mang_DV as $key => $dongvat)
        {
    ?>
         <div class="ten_dong_vat">
        <a href="?id_DV=<?php echo $key;?>">
            
            <?php 
            echo $dongvat['ten_dong_vat'] ; 
            ?>
          
        </a>
        </div>
    <?php

        }
    ?>

    </div>


<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

<div class="MO_TA_DONG_VAT"><h1>Mô tả động vật</h1></div>
    

        <?php       
            echo $mang_DV[$id_CV]['mota'];
       
        ?>
</div>
    
</div>
    
</body>
</html>