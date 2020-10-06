<?php
if(isset($_POST['name']) )
{
    $file = fopen($_POST['name'],"r") or exit('khong mo duoc file');
//     $content = $_POST['content'];
//     fread($file,$content);
//     fclose($file);

    // if(file_exists($file))
    // {

        function in_dong($a)
        {
           
            while(!feof($a))
            {
                $dong = fgets($a);
                echo  $dong.'<br>';
            }
        }
           
          
      
    
       
    // }
    // else{
    //     echo 'do not has file';
    // }
}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">Ten File</label>
                <input type="text" class="form-control" name="name" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">Noi dung</label>
    <?php  in_dong($file) ?>
            </div>
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    
</body>
</html>