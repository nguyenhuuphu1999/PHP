<?php
include 'modal.php';
if(isset($_POST['ten_sach'])&&isset($_POST['ma_sach'])&&isset($_POST['tac_gia'])&&isset($_POST['don_gia'])&&isset($_POST['nha_xuat_ban']))
{
    $sachnew =new sach($_POST['ten_sach'],$_POST['ma_sach'],$_POST['tac_gia'],$_POST['don_gia'],$_POST['nha_xuat_ban']);
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
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
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
            </div>

            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    
</body>
</html>