<?php
    if(isset($_POST['sm']))
    {
        $inputA=$_POST['inputA'];
        $inputB=$_POST['inputB'];
        $mangA=explode(',',$inputA);
        $mangB=explode(',',$inputB);
        //$mangC=array($mangA.$mangB);
       //print_r(array_merge($inputA,$inputB));
      //print_r($mangA);
        //$onlyA= array_unique($inputA.$inputA);
        //print_r($onlyA);
       // $locmang=array_unique($mangA);
       $filterA=array_diff($mangA,$mangB);
        $outputA=implode(',',$filterA);
    
        //filterB
        $filterB=array_diff($mangB,$mangA);
        $outputB=implode(',',$filterB);
     
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm phần tử khác nhau trong mảng</title>
    
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    
</head>

<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Tìm phần tử khác nhau trong mảng</legend>
        
            <div class="form-group">
                <label for="">Mảng A</label>
                <input type="text" class="form-control" name='inputA' value="<?php if(isset($_POST['inputA'])) echo $_POST['inputA']?>" placeholder="Input field">


                <label for="">Mảng B</label>
                <input type="text" class="form-control" name='inputB' value="<?php if(isset($_POST['inputB'])) echo $_POST['inputB']?>" placeholder="Input field">

                <button type="submit" class="btn btn-primary" name="sm">Search</button><br>

                 <label for="">Phần tử chỉ có trong mảng A</label>
                <input type="text" class="form-control" disabled value="<?php if(isset($filterA))echo $outputA?>">


                <label for="">Phần tử chỉ có trong mảng B</label>
                <input type="text" class="form-control" disabled value="<?php if(isset($outputB))echo $outputB?>">
            </div>
        
            
        
           
        </form>
        
    </div>
    
</body>
</html>