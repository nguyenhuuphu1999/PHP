<?php 
    if(isset($_POST['submit']) && isset($_POST['name_file']))
    {
        // if($_FILES['upload'] ['error']>0)
        // {
        //     echo 'Co loi torng viec upload file !';
        // }else{
        //     // var_dump($_FILES['upload']);
        //     move_uploaded_file($_FILES['upload']['tmp_name'],
        //             'upload/' .$_FILES['upload']['name']);
        //             echo 'upload thanh cong';
        //             echo "<pre>";
        //             print_r($_FILES['upload']);
        //             echo "</pre>";
        //             $load="upload/".$_FILES['upload']['name'];
        //             echo '<a href="$st">Dowload ve may tinh</a>';
        // }

        if($_FILES["name_file"]["name"] != NULL)
        {
            // if($_FILES["name"]["type"] == "image.jpg" || $_FILES["name"]["type"] == "image.png" )
            // {
                $path="image/";//duong dan file
                $tmp = $_FILES["name"]["tmp_name"];//
                $name = $_FILES["file"]["name"];//ten file
                move_uploaded_file($tmp,$path.$name);
                echo "upload file thanh cong";
            // }
        }
        else{
            echo"file chua duoc upload";
        }
    }
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
    
</head>
<body>
    
    <div class="container">
        
        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <legend>Upload File</legend>
        
            <div class="form-group">
                <label for="">label</label>
                <input type="file" name="name_file" >
            </div>
        
            
        
         <input type="submit" name="submit" value="upload">
        </form>
        
    </div>
    
</body>
</html>