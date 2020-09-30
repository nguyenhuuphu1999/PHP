<?php

 if(isset($_POST['sm']))
{
    
        
        $input = $_POST['year'];
        $can= $input %10;
        $chi = $input%12;
        switch ($can){
            case 0: $can = 'Canh'; break;
            case 1 :$canchi='Tân'; break;
            case 2:$canchi='Nhân'; break;
            case 3:$canchi = 'Quý'; break;
            case 4:$canchi='Giáp'; break;
            case 5: $canchi = 'Ất'; break;
            case 6 :$canchi='Đính'; break;
            case 7:$canchi='Đinh'; break;
            case 8:$canchi = 'Mậu'; break;
            case 9:{
                $canchi = 'Kỷ';
                break;
            }
        }
        switch ($chi){
            case 0: $canchi .= 'Thân'; break;
            case 1 :$canchi.='Dậu '; break;
            case 2:$canchi.='Tuất'; break;
            case 3:$canchi .= 'Hợi'; break;
            case 4:$canchi.='Tý'; break;
            case 5: $canchi .= 'Sửu'; break;
            case 6 :$canchi.='Dần'; break;
            case 7:$canchi.='Mão'; break;
            case 8:$canchi .= 'Thìn'; break;
            case 9:$canchi .= 'Tỵ'; break;
            case 10:$canchi .= 'Ngọ'; break;
            case 11:$canchi .= 'Mùi'; break;
        }
    
   
  
}

  
  
   // print_r($mangIMG[1]);  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh can Chi</title>
        <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap</script>/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

</head>
<body>
    
    <form action="" method="POST" role="form">
        <legend>Tính Can Chi</legend>
    
        <div class="form-group">
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label for="">Nhập Tuổi</label>
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <input type="number" class="form-control"name="year" value="<?php if(isset($_POST['year'])== true) echo $_POST['year']?>" placeholder="Input field">
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
           
        <button type="submit" class="btn btn-primary" name='sm'>Submit</button>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control"name="" value="<?php if(isset($canchi) == true) echo $canchi?>" placeholder="Input field">
            </div>
        </div>
    
       <!-- //<?php
         //$hinh= array(' <img src="../../img/111dedf21dcd573103193047eb5d03ca.jpg" alt="">')
            //echo '<img src="'../../img/111dedf21dcd573103193047eb5d03ca.jpg'" alt="">';
        //?>-->
        <img src="con_giap.jpg" alt="">
    </form>
    
</body>
</html>