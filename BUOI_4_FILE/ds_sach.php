<?php
include 'modal.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Ten sach</th>
                    <th>Ma sach</th>
                    <th>Tac gia</th>
                    <th>Don gia</th>
                    <th>Nha Xuat Ban</th>
                </tr>
            </thead>
            <tbody>
              
                        <?php 
                                if(file_exists('danh_sach.txt'))
                                {
                                    $file =fopen('danh_sach.txt',"r");
                                    //doc file theo dong
                                    while(!feof($file))
                                    {
                                        $dong = fgets($file);

                                        if($dong){
                                            $thong_tin_sach =new sach();
                                            $thong_tin_sach->chuyen_dong_thanh_thong_tin($dong);
                                            // print_r($thong_tin_sach);
                                            $thong_tin_sach->in_sach();
                                        }
                                    }
                                }
                                else
                                {
                                    echo 'khong co file can mo';
                                }
                              
                        ?>
                          

            </tbody>
        </table>
        
    </div>
    
</body>
</html>