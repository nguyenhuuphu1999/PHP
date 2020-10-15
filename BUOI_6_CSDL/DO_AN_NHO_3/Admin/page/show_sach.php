<?php
    $so_trang_can_chia=12;

    $db =new PDO('mysql:host=localhost;dbname=bookstore','root','');

    $db->query('set name utf-8');

    $sql="SELECT bs_sach.*,ten_tac_gia FROM bs_sach join bs_tac_gia on bs_sach.id_tac_gia = bs_tac_gia.id  ";

    $statement =$db->prepare($sql);
    $statement->execute();

    $result=$statement->fetchAll(PDO::FETCH_OBJ);
    
    $SL=count($result);

    $so_sach_tren_trang=ceil($SL/$so_trang_can_chia);
// echo $SL;
// echo $result[1]->hinh
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sach noi bat</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP 4 -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        -->
    <script type="text/javascript" src="../js/simple_pagination.js"></script>
    <link rel="stylesheet" href="../css/simple_pagination.css">

    <style>
        .text-left{
            margin-bottom:100px;
        }
        .card-text{
            font-size:15px;
            color:#848484;
        }
        .card-text-money{
            font-size:20px;
            color:#000000;
            font-weight:bold;
        }
        .card-text-gia_bia{
            font-size:14px;
            text-decoration:line-through
        }
        .btn-info{
            float: right;
             margin-top: -37px;
        }
    </style>
</head>
<body>
<!-- <img src="../images/<?php echo$result[1]->hinh?>" alt="sdsd"> -->
   <!-- <div class="container">
   
        <?php 
            for($i=0;$i<$SL;$i++)
            {
                ?>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card text-left">
                          <img class="card-img-top" src="../images/<?php echo $result[$i]->hinh?>" alt="">
                          <div class="card-body">
                                <h4 class="card-title"><?php echo $result[$i]->ten_sach ?></h4>
                                <p class="card-text"><?php echo $result[$i]->ten_tac_gia?></p>
                                <p class="card-text-money"> <?php echo $result[$i]->don_gia?>đ</p>
                                <p class="card-text-gia_bia"> <?php echo $result[$i]->gia_bia?>đ</p>

                                
                                <button type="button" class="btn btn-info">Mua hang</button>
                                
                          </div>
                        </div>
                    </div>
                   
                   
                    
                <?php              
            }
        ?>
   </div> -->
    
    <div class="container">
        <div id="show_data">
        
        </div>
    </div>
    <div id="pagination" class="pagination"></div>
    <script>
    function func_build_product(data_list)
    {
        var product='';
        for(var i =0 ; i< data_list.length; i++)
        {
            product +=`
                
            ${data_list[i].ten_sach}<br>
            <img src="../images/${data_list[i].hinh}">
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            ${data_list[i].ten_sach}<br>
            <img src="../images/${data_list[i].hinh}">
            </div>
            

            `
        }
        // console.log(product);

        $('#show_data').html(product);
    }


    // $(function(){
    //     $('#pagination').pagination({
    //         items:<?php echo $SL?>,
    //         itemsOnPage:10,
    //         cssStyle:'light-theme',
    //         onPageClick: function(pageNumber) {
    //         console.log(pageNumber - 1);

    //             $.get('http://localhost/PHP/BUOI_6_CSDL/DO_AN_NHO/Admin/api.php?trang=' + (pageNumber - 1))
                    
    //                 .done((data) => {
    //                     console.log(JSON.parse(data));

    //                     function_build_html(JSON.parse(data));
    //                 })
    //                 .fail((err) => {
    //                     console.log(err);
    //                 })


    //         }
    //     });

    // });
    $(function() {
            $('#pagination').pagination({
                items: <?php echo $SL; ?>,
                itemsOnPage: 10,
                cssStyle: 'light-theme',
                onPageClick: function(pageNumber) {
                console.log(pageNumber - 1);
                    // // We need to show and hide `tr`s appropriately.
                    // var showFrom = perPage * (pageNumber - 1);
                    // var showTo = showFrom + perPage;

                    // // We'll first hide everything...
                    // items.hide()
                    //     // ... and then only show the appropriate rows.
                    //     .slice(showFrom, showTo).show();

                    $.get('http://localhost/PHP/BUOI_6_CSDL/DO_AN_NHO/Admin/api.php?trang=' + (pageNumber - 1))
                    
                        .done((data) => {
                            console.log(JSON.parse(data));

                            func_build_product(JSON.parse(data));
                        })
                        .fail((err) => {
                            console.log(err);
                        })

                }
            });
        });
  
    </script>
    
      
    
</body>
</html>