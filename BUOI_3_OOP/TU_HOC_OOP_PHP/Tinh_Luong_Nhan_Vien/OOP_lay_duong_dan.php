<?php
   $Animal=array(
       array('con vat'=>'Con Ca Heo','mo ta'=>'Cá heo là động vật có vú sống ở đại dương và sông nước có quan hệ mật thiết với cá voi. Có gần 40 loài cá heo thuộc 17 chi sinh sống ở các đại dương, số ít còn lại sinh sống tại một số con sông trên thế giới. Kích thước của cá heo có thể từ 1,2 m và 40 kg, cho tới 9,5 m và 10 tấn. '),
       array('con vat'=>'Con Huu Cao Co','mo ta'=>'Chi Hươu cao cổ là một chi các động vật có vú thuộc bộ Guốc chẵn, là động vật cao nhất trên cạn và động vật nhai lại lớn nhất. Nó được phân loại trong họ Giraffidae, cùng với họ hàng gần nhất còn tồn tại của nó là hươu đùi vằn. Chi có 11 loài, bao gồm loài điển hình Giraffa camelopardalis'),
       array('con vat'=>'Con Cho','mo ta'=>"Chó hay Chó nhà, là một loài động vật thuộc chi Chó, tạo nên một phần tiến hóa của sói, đồng thời là loài động vật ăn thịt trên cạn có số lượng lớn nhất.")
   );
   $id=0;
   if(isset($_GET['id']))
   {
       $id = $_GET['id'];
   }

    echo $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trích xuất đường dẫn</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php
             foreach($Animal as$key=>$dong_vat){
                 ?>
                    <a href="?id=<?php echo $key?>">
                            <?php echo $dong_vat['con vat']?>
                    </a> 
                    <br>
                 <?php
             }
                
            ?>
        </div>
        

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
             <div>
             <?php echo $Animal[$id]['mo ta']?>
             </div>
        </div>
    </div>
    
</body>
</html>