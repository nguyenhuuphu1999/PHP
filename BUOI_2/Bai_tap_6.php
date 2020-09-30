<?php
    if(isset($_POST['sm']))
    {
        //$mang = '1,2,3,4,5,6';
        $mang =$_POST['input'] ;

        //$mangxl = implode(',',$mang); ''
        $mangxl = explode(",",$mang);
      
        $n =count($mangxl);
        $tim=$_POST['check'];
        $thaythe = $_POST['change'];
        for($i = 0 ;$i <$n ; $i++)
        {
            if($mangxl[$i] == $tim)
            {
                $mangxl[$i] = $thaythe;
            }
        }
        $arr="";
     for($i =0 ;$i < $n ; $i++)
     {
      if($i == $n -1)
      {
          $arr .= $mangxl[$i] ; 
      }
      else{
        $arr .= $mangxl[$i] .','; 
      }
     }
      echo $arr;
    
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay The</title>
        <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap</script>/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    
    <form action="" method="POST" role="form">
        <legend>Thay Thế</legend>
    
        <div class="form-group">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">Nhập mảng</label>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input type="text" class="form-control" name="input" value="<?php if(isset($_POST['input'])) echo $_POST['input']?>" placeholder="Input field">
            </div>
    

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">Giá trị cần thay thế</label>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input type="text" class="form-control" name="check" value="<?php if(isset($_POST['check'])) echo $_POST['check']?>" placeholder="Input field">
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">Giá trị thay thế</label>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input type="text" class="form-control" name="change" value="<?php if(isset($_POST['change'])) echo $_POST['change']?>" placeholder="Input field">
            </div>
           
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button type="submit" name="sm" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">Mảng Củ</label>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input type="text" class="form-control" value="<?php if(isset($mang)) echo $mang?>" disabled>
            </div>
    
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="">Mảng mới</label>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input type="text" class="form-control" value="<?php if(isset($arr)) echo $arr?>" disabled>
            </div>
    </form>
    
</body>
</html>