<?php

    include 'thu_vien_3.php';
    $table_1='';

    if(isset($_POST['dong'])&&isset($_POST['cot'])&&isset($_POST['rong'])&&isset($_POST['vien'])&&isset($_POST['o'])&&isset($_POST['kc_dong']))
    {
        $table_1 =new table($_POST['dong'],$_POST['cot'],$_POST['rong'],$_POST['vien'],$_POST['o'],$_POST['kc_dong']);
        $conten_table = new conten_table($_POST['conten_dong'],$_POST['conten_cot'],$_POST['color'],$_POST['content']);
    }

  echo '<pre>',  print_r($conten_table),'</pre>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kẻ Bảng</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
      
        td {
            border-top:<?php if(isset($_POST['vien'])) echo $_POST['vien']?> ;
            border:<?php if(isset($_POST['vien'])) echo $_POST['vien']?>;
            width:<?php if(isset($_POST['kc_o'])) echo $_POST['kc_o']?>;
            height:<?php if(isset($_POST['kc_dong'])) echo $_POST['kc_dong']?>;
        }
      

        .table{
          
            width:<?php if(isset($_POST['rong'])) echo $_POST['rong']?>
        }
    </style>
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>TABLE</legend>
        
            <div class="form-group">
           
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <label for="">Số dòng</label>
                <input type="text" class="form-control" name="dong" value="<?php if(isset($_POST['dong'])) echo $_POST['dong']?>" placeholder="Input field">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <label for="">Số cột</label>
                <input type="text" class="form-control" name="cot" value="<?php if(isset($_POST['cot'])) echo $_POST['cot']?>" placeholder="Input field">
            </div>
            
                <label for="">Độ rộng</label>
                <input type="text" class="form-control" name="rong" value="<?php if(isset($_POST['rong'])) echo $_POST['rong']?>" placeholder="Input field">

                <label for="">Đường viền</label>
                <input type="text" class="form-control" name="vien" value="<?php if(isset($_POST['vien'])) echo $_POST['vien']?>" placeholder="Input field">

                <label for="">Khoản cách ô</label>
                <input type="text" class="form-control" name="o" value="<?php if(isset($_POST['o'])) echo $_POST['o']?>" placeholder="Input field">

                <label for="">Khoản cách dòng</label>
                <input type="text" class="form-control" name="kc_dong" value="<?php if(isset($_POST['kc_dong'])) echo $_POST['kc_dong']?>" placeholder="Input field">        
            </div>
        <hr width="100%" >
            <label for="">Nội dung</label>
                <input type="text" class="form-control" name="content" value="<?php if(isset($_POST['content'])) echo $_POST['content']?>" placeholder="Input field"> 
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Dòng</label>
                <input type="text" class="form-control" name="conten_dong" value="<?php if(isset($_POST['conten_dong'])) echo $_POST['conten_dong']?>" placeholder="Input field"> 
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Cột</label>
                <input type="text" class="form-control" name="conten_cot" value="<?php if(isset($_POST['conten_cot'])) echo $_POST['conten_cot']?>" placeholder="Input field"> 
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <label for="">Màu nền</label>
                <input type="text" class="form-control" name="color" value="<?php if(isset($_POST['color'])) echo $_POST['color']?>" placeholder="Input field"> 
            </div>
            <hr width="100%" > 
        
            <button type="submit" name="sm" class="btn btn-primary">Submit</button>
        </form>

        
        <table class="table " >
           <?php
           $flag=0;
            for($i=1; $i <= $_POST['dong']; $i++)
            {   
                ?>
                   <tr>
                <?php
                for($j=1 ;$j <= $_POST['cot'] ;$j++)
                {
                  
                   
                    ?>
                        <td >|
                            <?php
                                if($_POST['conten_dong'] == $i && $_POST['conten_cot'] == $j)
                                {
                                    ?>
                                        <span style="background-color:<?php echo $_POST['color']?> ;">
                                            <?php   echo $_POST['content'];
                                            ?>
                                        </span>       
                                    <?php
                                }
                                
                            ?>
                        </td>
                    <?php
                        
                   
                }
                ?>
                 </tr>
                <?php
            }
            ?>
        </table>
        
        
    </div>
    
</body>
</html>