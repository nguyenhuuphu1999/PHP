<?php
    if(isset($_POST['sm']))
    {   
        $array='';
        $mang=array();
        $number = $_POST['input'];
        for($i=0 ;$i < $number ; $i++)
        {
            $random =rand(0,20);
          
                $mang[]= $random ;
          
        }
        //foreach($mang as $key => $xl)
        //{
          //  $array .= $xl;
        //}
        //print_r ($mang);
        //xu ly max

        //IN ra mang
            $xlmang = implode(',',$mang);

        $sum=0;
        $n = count($mang);
       
        $max=$mang[0];
        $min = $mang[0];
        
        //foreach($mang as $key => $so)
        for ($i = 0 ; $i < $n ; $i++)
        {
            
          $sum += $mang[$i];
         
        }

       for($i=1 ;$i < $n ;$i++)
       {
           if($mang[$i] > $max)
           {
               $max = $mang[$i];
           }
           if($mang[$i] <$min)
           {
               $min = $mang[$i];
           }
       }
       
      echo 'max la'. $max;
      //echo 'max ne'. $max;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phat Sinh mang va tinh toan</title>
    
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
   <!--bs3-cdn-->
    
    
</head>

<body>
    .
    <form action="" method="POST" role="form">
        <legend>Phat Sinh Mang Va Tinh Toan</legend>
    
        <div class="form-group">
            <label for="">Nhập Số Phần Tử</label>
            <input type="text" class="form-control" name='input' value="<?php if(isset($_POST['input'])) echo $_POST['input']?>" placeholder="Number">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name='sm'>Phát Sinh</button>
        </div>

        <div class="form-group">
            <label for="">Mảng</label>
            <input type="text" class="form-control" value="<?php if(isset($xlmang) ) echo $xlmang?>" disabled>
        </div>
    
        <div class="form-group">
            <label for="">GTLN trong mảng</label>
            <input type="text" class="form-control" value="<?php if(isset($max)) echo $max?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Giá trị nhỏ nhất trong mảng</label>
            <input type="text" class="form-control" value="<?php if(isset($min)) echo $min?>" disabled>
        </div>

        <div class="form-group">
            <label for="">Tổng Mảng</label>
            <input type="text" class="form-control" value="<?php if(isset($sum)) echo $sum?>" disabled>
        </div>
        
    
      
    </form>
    
</body>
</html>