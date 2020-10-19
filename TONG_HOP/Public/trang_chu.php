<?php

$link_image='./images';
//    include_once('../OOP/SQL.php');
   
//    $data = new database();
//    $data->database();
//    $sql="SELECT * FROM bs_sach"
//    $data->getsql($sql);

$db =new PDO('mysql:host=localhost;dbname=bookstore','root',"");
$db->query("set name utf-8");

$sql="SELECT * FROM bs_slide_banner";

$statement= $db->prepare($sql);
$statement->execute();

$result=$statement->fetchAll(PDO::FETCH_OBJ);


$sql_sach="SELECT bs_sach.*,ten_tac_gia FROM bs_sach  JOIN bs_tac_gia  on bs_sach.id_tac_gia = bs_tac_gia.id where noi_bat=1";
$statement_sach=$db->prepare($sql_sach);
$statement_sach->execute();
$result_sach=$statement_sach->fetchAll(PDO::FETCH_OBJ);

$sql_sach_id_most="SELECT bs_sach.*,ten_tac_gia FROM bs_sach  JOIN bs_tac_gia  on bs_sach.id_tac_gia = bs_tac_gia.id ORDER BY bs_sach.id DESC LIMIT 8";
$statement_sach_id_most=$db->prepare($sql_sach_id_most);
$statement_sach_id_most->execute();
$result_sach_id_most=$statement_sach_id_most->fetchAll(PDO::FETCH_OBJ);



$sql_sach_ban_chay="SELECT bs_sach.* ,bs_tac_gia.ten_tac_gia ,sum(bs_chi_tiet_don_hang.so_luong) FROM `bs_chi_tiet_don_hang` JOIN bs_sach on bs_sach.id = bs_chi_tiet_don_hang.id_sach JOIN bs_tac_gia on bs_sach.id_tac_gia = bs_tac_gia.id GROUP BY id_sach ORDER by sum(bs_chi_tiet_don_hang.so_luong) DESC LIMIT 8";
$statement_sach_ban_chay=$db->prepare($sql_sach_ban_chay);
$statement_sach_ban_chay->execute();
$result_sach_ban_chay=$statement_sach_ban_chay->fetchAll(PDO::FETCH_OBJ);

// echo"<pre>",print_r($result_sach_ban_chay),"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Css/style.css">
</head>
<body>
    
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                foreach($result as$key=>$sliede)
                {
                    $active =($key ==0)?'active':'';
                    ?>
                    <li data-target="#carousel-id" data-slide-to="0" class="<?php echo $active?>"></li>
                    <?php
                }
            ?>
        </ol>
        <div class="carousel-inner">

                <?php
                    foreach($result as$key =>$slide)
                    {
                        $active=($key == 0)?'active':'';
                        ?>
                            <div class="item <?php echo $active?>">
                               <img  alt="First slide" src="<?php echo $link_image?>/slide_banner/<?php echo $slide->hinh?>">
                            </div>
                        <?php
                    }
                ?>

           
            
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

  
  


<div class="container">
    <b>  Sách nổi bật</b>
  
 <hr width=100% height:100px> 
<?php
    foreach($result_sach as$key=>$sach)
    {
        ?>
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="hinh_sach">
                <img src="<?php echo $link_image?>/sach/<?php echo $sach->hinh?>" alt="">   
                </div>

                <div class="ten_sach">
                    <B><?php echo $sach->ten_sach?></B>
                </div>

                <div class="ten_tac_gia">
                    <?php echo $sach->ten_tac_gia?>
                </div>

                <div class="gia_sach">
                <?php echo $sach->don_gia?><b>đ</b>
                </div>

                <div class="gia_bia">
                <strike><?php echo $sach->gia_bia?></strike>
                </div>

                <div class="button_shopping_cart">
                    <button>Mua ngay                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                </button>
                    
                </div>
            </div>
            
        <?php
    }
  ?>




    <b>  Sách Mới</b>
  
        <hr width=100% height:100px> 
        <?php
            foreach($result_sach_id_most as$key=>$sach)
            {
                ?>
                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="hinh_sach">
                        <img src="<?php echo $link_image?>/sach/<?php echo $sach->hinh?>" alt="">   
                        </div>

                        <div class="ten_sach">
                            <B><?php echo $sach->ten_sach?></B>
                        </div>

                        <div class="ten_tac_gia">
                            <?php echo $sach->ten_tac_gia?>
                        </div>

                        <div class="gia_sach">
                        <?php echo $sach->don_gia?><b>đ</b>
                        </div>

                        <div class="gia_bia">
                        <strike><?php echo $sach->gia_bia?></strike>
                        </div>

                        <div class="button_shopping_cart">
                            <button>Mua ngay <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        </button>
                            
                        </div>
                    </div>
                    
                <?php
            }
        ?>

       
  
  <b>Sách Bán Chạy Nhất</b>
  <hr width=100% height:100px> 
  <?php
      foreach($result_sach_ban_chay as$key=>$sach)
      {
          ?>
              
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                 
                <div class="content">

                    <div class="number">
                        <?php echo $key+1?>
                    </div>
                    <img class="best_sile"  src="<?php echo $link_image?>/bestsell.jpg" >    
                    <img src="<?php echo $link_image?>/sach/<?php echo $sach->hinh?>" alt="">   
                    

                    <div class="ten_sach">
                        <B><?php echo $sach->ten_sach?></B>
                    </div>

                    <div class="ten_tac_gia">
                        <?php echo $sach->ten_tac_gia?>
                    </div>

                    <div class="gia_sach">
                    <?php echo $sach->don_gia?><b>đ</b>
                    </div>

                    <div class="gia_bia">
                    <strike><?php echo $sach->gia_bia?></strike>
                    </div>

                    <div class="button_shopping_cart">
                        <button>Mua ngay                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </button>
                        
                    </div>
                  </div>
              </div>
              
          <?php
      }
  ?>
</div>


        

</body>
</html>