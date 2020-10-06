<?php
class hang_hoa{
    public $ten_hang,$so_luong,$don_gia,$tong_tien;

    function hang_hoa($ten_hang,$so_luong,$don_gia,$tong_tien)
    {
        $this->ten_hang=$ten_hang;
        $this->so_luong=$so_luong;
        $this->don_gia=$don_gia;
        $this->tong_tien=$tong_tien;
    }

    function tinh_tien()
    {
        return $this->so_luong * $this->don_gia;
    }

    function doc_file($name){
        $file=fopen($name,"a+");
        $content=$this->ten_hang.'||'.$this->so_luong.'||'.$this->don_gia.'||'.$this->tong_tien."\r\n";
        fwrite($file,$content);
        fclose($file);
    }
}

    if(isset($_POST['file'])&&isset( $_POST['ten_hang'])&& isset($_POST['so_luong'])&&isset($_POST['don_gia']))
    {

        if(empty($_POST['file'])||empty($_POST['ten_hang'])||empty($_POST['so_luong'])||empty($_POST['don_gia']))
        {
            echo 'Vui long nhap thong tin day du';
           
        }
        else{
            $hang_hoa=new hang_hoa($_POST['ten_hang'],$_POST['so_luong'],$_POST['don_gia'],'haha');
            $hang_hoa->tong_tien= $hang_hoa->tinh_tien();
            $hang_hoa->doc_file($_POST['file']);
            echo   $hang_hoa->tong_tien;
        }
      
        // echo $money;
        // print_r($hang_hoa);
       
        
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tao_Ghi_Doc_file_Dinh_dang</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Doc file co dinh dang</legend>
        
            <div class="form-group">
                <label for="">Ten file</label>
                <input type="text" class="form-control" name="file" value="<?php if(isset($_POST['file'])) echo $_POST['file']?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">Ten hang</label>
                <input type="text" class="form-control" name="ten_hang" value="<?php if(isset($_POST['ten_hang'])) echo $_POST['ten_hang']?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">So luong</label>
                <input type="text" class="form-control" name="so_luong" value="<?php if(isset($_POST['so_luong'])) echo $_POST['so_luong']?>" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Don Gia</label>
                <textarea name="don_gia" id="" cols="30" rows="10"></textarea>  
            </div>



            
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    
</body>
</html>