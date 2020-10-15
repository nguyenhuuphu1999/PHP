<?php

    $db= new PDO('mysql:host=localhost;dbname=bookstore;root','root','');
    $sql = "SELECT * FROM bs_sach";
    $tac_gia="SELECT id_tac_gia,ten_tac_gia
    FROM bs_tac_gia
    join bs_sach
    ON bs_tac_gia.id = bs_sach.id_tac_gia"
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    $statement_tac_gia = $db->prepare($tac_gia);
    $statement_tac_gia ->execute();
    $result_tac_gia = $statement_tac_gia->fetchAll(PDO::FETCH_OBJ);

    $result = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $sach)
    {
        $so_luong = $sach->id;
    }
    // foreach($result as $sach)
    // {
    //     echo $sach->ten_sach.'<br>';
    // }
//   echo  $result[1]->ten_sach;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        .jumbotron p{
            width:300px;
            height:200px;

        }
    </style>
</head>
<body>
    
    <div class="container">
    <?php
        for($i=1;$i<=$so_luong;$i++ )
        {
            ?>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    
                    <div class="jumbotron">
                        
                            
                                <?php
                                    
                                        echo $result[$i]->hinh;
                                   
                                ?>
                            
                            <p>
                                <?php 
                                  echo  $result[$i]->ten_sach;
                                ?>
                            </p>

                            <p>
                                <?php
                                    echo $result[$i]->tac_gia;
                                ?>
                            </p>
                            <p style="width:100%">
                                <a class="btn btn-primary btn-lg">Learn more</a>
                            </p>
                       
                    </div>
                    
                </div>
                
            <?php
        }

    
    ?>    
    </div>
    
</body>
</html>