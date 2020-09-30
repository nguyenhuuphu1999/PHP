<?php

if(isset($_POST['submit']))
{ 
    $dayso=$_POST['nhapvao'];
  $mang=explode(",", $dayso);
  $n=count($mang);
  $SUM=0;
  for ($i = 0 ; $i < $n; $i++)
  {
      if(is_numeric($mang[$i]))
        $SUM += $mang[$i]; 
     //$Tong += ($mang[$i]) ;

     
  }
 echo $SUM;
 
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
            <legend>Form title</legend>
        
            <div class="form-group">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="">Nhập vào dãy số   </label>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label for="">Tổng dãy số   </label>
                    </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" class="form-control" name="nhapvao" value="<?php if(isset($_POST['nhapvao']) == true) echo $_POST['nhapvao']?>" placeholder="Nhập dãy số">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="text" class="form-control" value="<?php if(isset($SUM) == true) echo $SUM?>" placeholder="Kết quả">
                </div>
              
           
            </div>
        
            
        
            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
        
    </div>
    
</body>
</html>