<?php
include 'modal.php';
if(isset($_FILES['hinh']))
{
    $link_book='./image/'.$_FILES['hinh']['name'];
    echo"<pre>",print_r($_FILES),"</pre>";
    // move_uploaded_file($_FILES['hinh']['tmp_name'],'./image/'.$_FILES['hinh']['name']);
    // foreach($_FILES['hinh']['name'] as$key => $value)
    // {
        move_uploaded_file($_FILES['hinh']['tmp_name'],"./image/".$_FILES['hinh']['name']);
    // }
}

if(isset($_POST['ten_sach'])&&isset($_POST['ma_sach'])&&isset($_POST['tac_gia'])&&isset($_POST['don_gia'])&&isset($_POST['nha_xuat_ban'])&& $link_book)
{
    $sachnew =new sach($_POST['ten_sach'],$_POST['ma_sach'],$_POST['tac_gia'],$_POST['don_gia'],$_POST['nha_xuat_ban'],$link_book);
    $sachnew->ghi_sach();
    print_r($sachnew);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sach</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
    img {
        width:200px;
    }
    </style>
</head>
<body>
    
    <div class="container">
   
           
        
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend>Sach</legend>
            <div class="form-group">
                <label for="">Ten sach</label>
               
               <input type="text" name="ten_sach" id="input" class="form-control" value="" >
               

                <label for="">Ma sach</label>
                <input type="text" name="ma_sach" id="input" class="form-control" value="" >

                <label for="">Tac gia</label>
                 <input type="text" name="tac_gia" id="input" class="form-control" value="" >

                <label for="">Don gia</label>
                <input type="text" name="don_gia" id="input" class="form-control" value="" >

                <label for="">Nha xuat ban</label>
                <input type="text" name="nha_xuat_ban" id="input" class="form-control" value="" >


                <label >Hinh</label> 
                <input type="file" name="hinh" id="input" class="form-control" value="" multiple="true">
                
                
            </div>

            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

       <?php
         $dir =opendir('image');
         
         while(($file = readdir($dir)) !== false){
            //  echo $file;
                if($file != '.' && $file != '..')
                {
                    ?>
                        <img src="./image/<?php echo $file;?>" alt="">
                    <?php
                }
         }
         closedir($dir);
       ?>
     
   

       
       
    </div>
    
</body>
</html>