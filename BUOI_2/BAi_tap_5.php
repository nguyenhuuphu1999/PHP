<?php
    if(isset($_POST['sm']))
    {
        $mang= explode(",",$_POST['mang']);
        $sum=0;
        $n = count($mang);
        for($i=0 ; $i < $n ; $i++ )
        {
           //$sum+=  $mang[$i] ;

           if($mang[$i] == $_POST['check'])
           {
               $vt= $i;
                break;
           }
        }
        echo $vt;
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
              <label for="">Nhap mang</label>
              <input type="text" class="form-control" name='mang' placeholder="Input field">
          </div>
          <div class="form-group">
              <label for="">Nhap so can tim</label>
              <input type="text" class="form-control" name='check' placeholder="Input field">
          </div>
          <button type="submit" class="btn btn-primary" name='sm'>Submit</button>
          <div class="form-group">
              <label for="">Mang</label>
              <input type="text" class="form-control" value="<?php if(isset($_POST['mang'])) echo $_POST['mang']?>" placeholder="Input field">
          </div>
          <div class="form-group">
              <label for="">KET QUA TIM KIEM</label>
              <input type="text" class="form-control" value='<?php if(isset($_POST['check']) ) echo 'Tìm thấy '.$_POST['check'] . ' tại vi tri '.  $vt?>' placeholder="Input field">
          </div>
         
      
          
      
         
      </form>
      
        
    </div>
    
</body>
</html>