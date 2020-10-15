<?php
    $so_sach_tren_trang = 10;
    $db = new PDO('mysql:host=localhost;dbname=bookstore', 'root', '');

    $db->query("set name utf-8");

    $sql = "SELECT * FROM bs_sach";

    $statement = $db->prepare($sql);
    $statement->execute();
    $so_trang_hien_tai=(isset($_GET['trang']))?$_GE['trang']:0;
    $ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);
    $tong_sl_sach = count($ds_sach);
    $so_trang = ceil($tong_sl_sach / $so_sach_tren_trang);
    echo $so_trang ;
    // $so_trang_hien_tai = (isset())--do tu php sang javácrip
    $sql_So_trang="SELECT * FROM bs_sach LIMIT ".$so_trang_hien_tai * $so_sach_tren_trang.",$so_sach_tren_trang";
    echo $sql_So_trang;

    $statement = $db->prepare($sql_So_trang);
    $statement->execute();
    $ds_hien_thi=$statement->fetchAll(PDO::FETCH_OBJ);
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

    <!-- <link rel="stylesheet" href="./">
    <script type="text/javascript" src="./js/simple_pagination.js"></script> -->
    <script type="text/javascript" src="./js/simple_pagination.js"></script>
    <link rel="stylesheet" href="./css/simple_pagination.css">
    
</head>
<body>
    
    <div class="container">
        
        <!-- <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TEN SACH</th>
                    <th>GIA SACH</th>
                    <th>GIA BIA</th>
                    <th>CHON</th>
                </tr>
            </thead>
            <tbody id="data_show">
                
                  <?php
                        foreach($ds_sach as $sach)
                        {
                            ?>
                            <tr>
                                <td><?php echo $sach->id;?></td>
                                <td><?php echo $sach->ten_sach;?></td>
                                <td><?php echo $sach->don_gia;?></td>
                                <td><?php echo $sach->gia_bia;?></td>
                                <td>
                                    <input type="checkbox" name="check_sach[]" value="<?php echo $sach->id;?>">
                                </td>
                            </tr>
                            <?php
                        }
                    ?> 
               
            </tbody>
        </table> -->

        <table id="table_sach" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Đơn giá</th>
                    <th>Giá bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody id="data_show">
            </tbody>
        </table>
        <div id="pagination" class="pagination"></div>
    </div>
    <script>
  function function_build_html(data_list){
            var string_html = '';

            for(var i = 0; i < data_list.length; i++){
                string_html += `
                <tr>
                    <td>${data_list[i].id}</td>
                    <td>${data_list[i].ten_sach}</td>
                    <td>${data_list[i].don_gia}</td>
                    <td>${data_list[i].gia_bia}</td>
                    <td>
                        <input type="checkbox" name="chon_sach[]" value="${data_list[i].gia_bia}">
                    </td>
                </tr>
                `
            }

            console.log(string_html);

            $('#data_show').html(string_html);
        }


        $(function() {
            $('#pagination').pagination({
                items: <?php echo $tong_sl_sach; ?>,
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

                            function_build_html(JSON.parse(data));
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