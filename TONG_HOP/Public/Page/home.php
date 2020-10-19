<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>