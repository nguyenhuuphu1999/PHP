<?php
    if(isset($_POST['sm']))
    {
        $A=$_POST['inputA'];
        $B=$_POST['inputB'];
        $mangA= explode(',',$A);
        $mangB=explode(',',$B);
        $mangC=$A.','.$B;
        $MANGC=explode(',',$mangC);
        $mangc=explode(',',$mangC);
       $outputC="";
       $sorttang='';
        $demC=count($MANGC);
//mang tang

        //sort($MANGC,SORT_NUMBERIC);
        //foreach($MANGC as $key => $Tang)
        //{   
        //    echo $Tang;
        //    if($key == $demC-1)
        //    {
         //       $sorttang .=$MANGC[$key];
        //    }
         //   else{
        //        $sorttang .=$MANGC[$key].',';
        //    }
       // }
       for($i=0 ; $i < $demC ; $i++)
       {
           for($j=$i+1 ; $j < $demC ; $j++)
           {
               if($mangc[$i] > $mangc[$j])
               {
                   $temp = $mangc[$i];
                   $mangc[$i] = $mangc[$j];
                   $mangc[$j] = $temp;
               }
           }
       }


      for($i=0; $i < $demC ;$i++)
      {
          if($i == $demC-1)
          {
              $sorttang .= $mangc[$i];
          }
          else{
              $sorttang .=$mangc[$i].',';
          }
      }




        //mang giam
         for($i=0 ; $i < $demC ; $i++)
         {
             for($j=$i+1 ; $j < $demC ; $j++)
             {
                 if($MANGC[$i] < $MANGC[$j])
                 {
                     $temp = $MANGC[$i];
                     $MANGC[$i] = $MANGC[$j];
                     $MANGC[$j] = $temp;
                 }
             }
         }


        for($i=0; $i < $demC ;$i++)
        {
            if($i == $demC-1)
            {
                $outputC .= $MANGC[$i];
            }
            else{
                $outputC .=$MANGC[$i].',';
            }
        }

        
        if(empty($A))
        {
            $demA = 0;
        }else{
            $demA=count($mangA);
           
        }

        if(empty($B))
        {
            $demB=0;

        }
        else{
            $demB=count($mangB);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm phần tử,ghép mảng và sắp xếp</title>
        <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap</script>/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Đếm phần tử Sắp Xếp và ghép mảng</legend>
        
            <div class="form-group">
                <label for="">Mảng A</label>
                <input type="text" class="form-control" name="inputA" value="<?php if(isset($A)) echo $A?>" placeholder="Input field">

                <label for="">Mảng B</label>
                <input type="text" class="form-control" name="inputB" value="<?php if(isset($B)) echo $B?>" placeholder="Input field">

                <button type="submit" name="sm" class="btn btn-primary">Submit</button><br>

                <label for="">Số phần tử mảng A </label>
                <input type="text" class="form-control" value="<?php if(isset($demA)) echo $demA?>" placeholder="Input field">

                <label for="">Số phần tử mảng B</label>
                <input type="text" class="form-control" value="<?php if(isset($demB)) echo $demB?>" placeholder="Input field">

                <label for="">Mảng C</label>
                <input type="text" class="form-control" value="<?php if(isset($mangC)) echo $mangC?>" placeholder="Input field">

                <label for="">Mảng C tăng dần</label>
                <input type="text" class="form-control" value="<?php if(isset($sorttang)) echo $sorttang?>" placeholder="Input field">


                <label for="">Mảng C giảm dần</label>
                <input type="text" class="form-control" value="<?php if(isset($MANGC)) echo $outputC?>" placeholder="Input field">



            </div>
        
            
        
         
        </form>
        
    </div>
    
</body>
</html>