<?php
 $db= new PDO("mysql:host=localhost;dbname=bookstore","root","");
 $db->query('set name utf-8');

 $sql="SELECT * FROM bs_sach";
 $statement = $db->prepare($sql);
 $statement->execute();
 $danh_muc_sach=$statement->fetchAll(PDO::FETCH_OBJ);


$amount_book = count($danh_muc_sach);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACH MOI NHAT</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">
    
</head>
<body>
    
    <div class="container">
        <div id="show"></div>
        <!-- <img src="./images/con_cho_va_gio_hoa_hong.jpg" alt=""> -->
        <div id="pagination" class="pagination"></div>
    </div>
    
    <script>
        function buil_product(data){
            var product='';
            for(var i=0 ;i<data.length;i++)
            {
                product+=`

               
               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                   <img src="./images/${data[i].hinh}">
                   <div style="margin-left:50px">
                        <p>${data[i].ten_sach}</p>
                        <p>${data[i].tac_gia}</p>
                        <p>${data[i].don_gia}đ</p>
                        <p>${data[i].gia_bia}</p>
                    </div>
               </div>
               

                `
            }
            console.log(product);
            $('#show').html(product);
        }



            $(function(){
                $('#pagination').pagination({
                    items:<?php echo $amount_book?>,
                    itemsOnPage:9,
                    cssStyle:'light-theme',
                    onPageClick:function(pageNumber){
                        console.log(pageNumber -1);
                        $.get('http://localhost/PHP/BUOI_6_CSDL/DO_AN_NHO_4/Admin/api.php?trang=' + (pageNumber - 1))
                        
                        .done((data)=>{
                            console.log(JSON.parse(data));
                            buil_product(JSON.parse(data))

                        })
                        .fail((data)=>{
                            console.log(err);
                        })

                    }
                })
            })



    </script>

</body>
</html>