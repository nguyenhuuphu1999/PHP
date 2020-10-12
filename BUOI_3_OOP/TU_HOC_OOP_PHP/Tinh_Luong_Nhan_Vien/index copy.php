<?php
include './Nhan_Vien.php';
$tmp="";
if($_POST['nhan_vien'] =='van_phong')
{
        $van_phong =new van_phong($_POST['ho_ten'],$_POST['ngay_sinh'],$_POST['gioi_tinh'],$_POST['so_con'] ,$_POST['ngay_vao_lam'] 
        ,$_POST['he_so_luong'] ,$_POST['luong'] ,$_POST['tro_cap'],$_POST['ngay_vang'] );

        echo "<pre>", print_r ($van_phong) ,"</pre>";
        $tmp =  $van_phong->tien_luong();

}else if($_POST['nhan_vien'] =="san_xuat"){
    $cong_nhan =new cong_nhan($_POST['ho_ten'],$_POST['ngay_sinh'],$_POST['gioi_tinh'],$_POST['so_con'] ,$_POST['ngay_vao_lam'] 
    ,$_POST['he_so_luong'] ,$_POST['luong'] ,$_POST['tro_cap'],$_POST['ngay_vang'],$_POST['sp'] );

    $tmp= $cong_nhan ->tien_luong();

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lương nhân viên</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Quản lý nhân viên</legend>
                </div>
        
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Họ và Tên
                </div>
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                    <input type="text" name="ho_ten" id="input" class="form-control" value="">
                    
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Số Con
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                    <input type="text" name="so_con" id="input" class="form-control" value="">
       
                </div>

                <!--DÒng 2-->
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   Ngày Sinh
                </div>
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                    <input type="text" name="ngay_sinh" id="input" class="form-control" value="">
                    
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Ngày vào làm
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                    <input type="text" name="ngay_vao_lam" id="input" class="form-control" value="">
       
                </div>

                 <!--DÒng 3-->
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  Giới tính
                </div>
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                   
                       
                            <input type="radio" name="gioi_tinh" id="" value="nam" checked="checked">
                            Nam
                            <input type="radio" name="gioi_tinh" id="" value="nu" >
                            Nữ
                       
                  
                                    

                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   Hệ Số Lương
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                    <input type="text" name="he_so_luong" id="input" class="form-control" value="">
       
                </div>

               <!--DÒng 4-->
               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  Loại Nhân Viên

                </div>
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                    
                    <div class="radio">
                        <label>
                            <input type="radio" name="nhan_vien" id="input" value="van_phong" checked="checked">
                            Văn phòng
                        </label>
                    </div>
                    
                    
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="radio">
                        <label>
                            <input type="radio" name="nhan_vien" id="input" value="san_xuat" >
                            Sản_xuất
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                        Tăng ca
                
                        <input type="radio" name="tang_ca" id="input" value="co" checked="checked">
                        Có
                        <input type="radio" name="tang_ca" id="input" value="khong" >
                        Không

       
                </div>

                  <!--DÒng 5-->
                
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                        Số ngày vắng

                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        
                            <input type="text" name="ngay_vang" id="input" class="form-control" value="" >
                
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            Số sản phẩm
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="text" name="sp" id="input" class="form-control" value="" >
                    </div>

            </div>
            
                <!--DÒng 6-->
                            
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        
                        Tiền Lương

                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        
                            <input type="text" name="luong" id="input" class="form-control" value="" >
                
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                           Trợ cấp
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="text" name="tro_cap" id="input" class="form-control" value="" >
                    </div>


                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                           Thực lãnh 
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                            <input type="text" name="thuc_lanh" id="input" class="form-control" value="<?php if(isset($tmp)) echo $tmp?>"  >
                    </div>
                   



                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Tính Lương</button>
                    </div>
                </div>
        </form>
        
    </div>
    
</body>
</html>
                    
               
                  
                  
                  
                
                      
                  
       
                    

                
        