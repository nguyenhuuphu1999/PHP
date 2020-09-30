<?php


if(isset($_POST['sm']))
{
    $input = $_POST['input'];
        $manglen = explode(',',$input);
        $n =count($manglen);
        
        for($i=0 ;$i < $n ; $i ++)
        {
           for($j = $i+1 ; $j < $n  ; $j++)
           {
               if($manglen[$i] > $manglen[$j])
               {
                   $temp = $manglen[$i];
                   $manglen[$i] =$manglen[$j];
                   $manglen[$j] =$temp;
               }
           }
        }
        $outputlen="";
        $outputxuong="";
        for($i= 0 ;$i < $n ; $i++)
        {
            if($i == $n - 1)
            {
                $outputlen .=$manglen[$i];
            }
            else{
                $outputlen .=$manglen[$i]. ',';
            }
        }


        $mangxuong = explode(',',$input);
        for($i = 0 ;$i < $n ;$i++)
        {
            for($j=0 ;$j < $n ; $j++)
            {
                if($mangxuong[$i] > $mangxuong[$j])
                {
                    $temp  = $mangxuong[$i];
                    $mangxuong[$i] =$mangxuong[$j];
                    $mangxuong[$j] =$temp;
                }
            }
        }

        for($i = 0 ;$i < $n ; $i++)
        {
            if($i == $n -1)
            {
                $outputxuong .= $mangxuong[$i]; 
            }else{
                $outputxuong .= $mangxuong[$i] .','; 
            }
        }

        echo $n;
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
        <legend>Sap xep</legend>
    
        <div class="form-group">
            <label for="">Nhap chuoi</label>
            <input type="text" class="form-control" name="input" value="<?php if(isset($_POST['input'])) echo $_POST['input']?>" placeholder="Input field">
           

            <label for="">Tang Dan</label>
            <input type="text" class="form-control" value="<?php if(isset($outputlen)) echo $outputlen ?>" placeholder="Input field">


            <label for="">Giam Dan</label>
            <input type="text" class="form-control" value="<?php if(isset($outputxuong))  echo $outputxuong?>" placeholder="Input field">



        </div>
        <button type="submit" name="sm" class="btn btn-primary">Submit</button>
        
    
       
    </form>
    
</body>
</html>