<?php
    if(isset($_POST['input']))
    {
        $input=$_POST['input'];
        $mang=explode(',',$input);
        $count_mang=array_count_values($mang);
        print_r($count_mang);
        $dem='';
        foreach($count_mang as $key => $giatri)
        {
            $dem.=$key .':'. $giatri.'  ';
        }
       
        $arr =array_unique($mang);
        sort($arr);
        $output=implode(',',$arr);
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm số lần xuất hiện trong mảng và tạo mảng duy nhất</title>
    
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Đếm số lần xuất hiện trong mảng và tạo mảng</legend>
        
            <div class="form-group">
                <label for="">Mảng</label>
                <input type="text" name="input" class="form-control" value="<?php if(isset($input)) echo $input?>"placeholder="Input field">

                <label for="">Số lần xuất hiện</label>
                <input type="text" class="form-control" disabled value="<?php if(isset($dem)) echo $dem?>" placeholder="Input field">

                <label for="">Mảng duy nhất</label>
                <input type="text" class="form-control" disabled value="<?php if(isset($output)) echo $output?>" placeholder="Input field">
            </div>
        
            
        
            <button type="submit" name="ms" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    
</body>
</html>