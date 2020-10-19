
<?php
$link_image='./images';
$so_trang =8; 
    $db= new PDO('mysql:host=localhost;dbname=bookstore','root','');
    $db->query('set name utf-8');

    // $so_trang_hien_tai =(isset($_GET['trang']))?$_GET['trang']:0;

    $sql = "SELECT * FROM `bs_tin_tuc`";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result= $statement->fetchAll(PDO::FETCH_OBJ);

  $sl=  count($result);
    // print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tuc</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">
    
</head>
<body>
    
    <div class="container">
        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            
            <table class="table table-hover">
         
                <tbody>
                    <tr id="show">
                        <!-- <td rowspan="2">hih</td>
                        <td>tieu de</td>
                        <td>NI DUNG</td> -->
                    </tr>
                </tbody>
            </table>
            
        </div>
        
    </div>

    <div class="pagination" id="pagination"></div>
    <script>
         function buil_product(data){
            var product='';
            for(var i=0 ;i<data.length;i++)
            {
                product+=`

               
        

            <img src="./images/tin_tuc/${data[i].hinh_dai_dien}" alt="">
               

                `
            }
            console.log(product);
            $('#show').html(product);
        }



            $(function(){
                $('#pagination').pagination({
                    items:<?php echo $sl?>,
                    itemsOnPage:8,
                    cssStyle:'light-theme',
                    onPageClick:function(pageNumber){
                        console.log(pageNumber -1);
                        $.get('http://localhost/PHP/TONG_HOP/Public/api.php?trang=' + (pageNumber - 1))
                        
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