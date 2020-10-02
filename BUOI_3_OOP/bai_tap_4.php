<?php
    $thang=date("m");
    $nam=date('y');
    $so_ngay_trong_thang = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);
   
 
    include 'thu_vien_4.php';
    if(isset($_POST['ten'])&&isset($_POST['ngay_sinh'])&&isset($_POST['con'])&&isset($_POST['ngay'])&&isset($_POST['luong']))
        $nhan_vien = new nhan_vien($_POST['ten'],$_POST['ngay_sinh'],$_POST['con'],'Nam', $_POST['ngay'],$_POST['luong']);
    if($_POST['nhan_vien'] == 'san_xuat' && isset($_POST['sm']))
   {
       $heso=$_POST['luong'];
      $luong = $_POST['luong'] * $so_ngay_trong_thang;
      echo $heso;
   }
  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly nhan vien</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Quản lý nhân viên</legend>
        
            <div class="form-group">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      
                    <label for="">Họ Tên</label>
                    <input type="text" class="form-control" value="<?php if(isset($_POST['ten'])) echo $_POST['ten']?>" name="ten" placeholder="Input field">

                    
                    <label for="">Ngày Sinh</label>
                    <input type="text" class="form-control" value="<?php if(isset($_POST['ngay_sinh'])) echo $_POST['ngay_sinh']?>" name="ngay_sinh" placeholder="Input field">

                    
                    <label for="">Giới Tính</label>
                   
                   <div class="radio">
                       <label>
                           <input type="radio" name="sex" id="input" value="nam" checked="checked">
                          Nam
                       </label>
                       <label>
                           <input type="radio" name="sex" id="input" value="nu" checked="checked">
                          Nữ
                       </label>
                   </div>
                   
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      
                      <label for="">Số con</label>
                      <input type="text" class="form-control" value="<?php if(isset($_POST['con'])) echo $_POST['con']?>" name="con" placeholder="Input field">
  
                      
                      <label for="">Ngày vào làm</label>
                      <input type="text" class="form-control" value="<?php if(isset($_POST['ngay'])) echo $_POST['ngay']?>" name="ngay" placeholder="Input field">
  
                      
                      <label for="">Hệ số lương</label>
                      <input type="text" class="form-control" value="<?php if(isset($_POST['luong'])) echo $_POST['luong']?>" name="luong" placeholder="Input field">
                  </div>
              
            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                        <label for="">Loại nhân viên</label>
                        
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <label>
                            <input type="radio"  name="nhan_vien" id="van_phong" value="van_phong" checked="checked">
                            Văn phòng
                        </label>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <label>
                            <input type="radio" name="nhan_vien" id="san_xuat" value="san_xuat" checked="checked">
                            Sản xuất
                        </label>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label for="">Số ngày vắng</label>
                        </div>
                        
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            
                            <input type="text" name="vang" id="input" class="form-control" value="" >
                            
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                  
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label for="">Sản phẩm</label>
                        </div>
                        
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            
                            <input type="text" name="sp" id="input" class="form-control" value="" >
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    Tăng ca    
                        <label>
                            <input type="radio" name="tang_ca" id="san_xuat" value="co" checked="checked">
                            Có
                        </label>
                        <label>
                            <input type="radio" name="tang_ca" id="san_xuat" value="khong" checked="checked">
                           Không
                        </label>
                    </div>
            
                            
                            
                        
                    
                
                      
                       
                
                      
                     
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Tiền lương</label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                       
                       <input type="text" name="luong" id="input" class="form-control" value="<?php if(isset($luong))echo $luong ?>" >
                       
                    </div>
                  
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="">Trợ cấp</label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                       
                       <input type="text" name="tro_cap" id="input" class="form-control" value="<?php if(isset($_POST['tro_cap'])) echo $_POST['tro_cap']?>" >
                       
                    </div>
                </div> 
            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="">Thực lãnh</label>
                
                <input type="text" name="thuc_lanh" id="input" class="form-control" value="<?php if(isset($_POST['thuc_lanh']))echo$_POST['thuc_lanh'] ?>" >
                
            </div>
            
            
          
            
            
            
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    
</body>
</html>