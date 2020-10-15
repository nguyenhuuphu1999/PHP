<?php
   $db = new PDO('mysql:host=localhost;dbname=bookstore','root','');
   $db->query('set name utf-8');
   $sql = ("SELECT * FROM bs_slide_banner WHERE trang_thai = 1");
   

   $statement = $db ->prepare($sql);
   $statement->execute();
   $result=$statement->fetchAll(PDO::FETCH_OBJ);
   
   // echo $result[4]->ten_slide;

   
  $so_luong= count($result);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Panel</title>
   
   <!-- Latest compiled and minified CSS & JS -->
   <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <script src="//code.jquery.com/jquery.js"></script>
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style>
      #slideshow {
         width: 700px;
         height: 400px;
         position: relative;
         overflow: hidden;
      }

      #slideshow img {
         position: absolute;    
      }
  </style>
</head>
<body>
   
   <div class="container">
      <!-- <img src="<?php echo $result[4]->hinh?>" alt=""> -->
      <div id="carousel-id" class="carousel slide" data-ride="carousel">

      <?php
         for($i=0; $i<$so_luong;$i++)
         {
            ?>
             
            <?php
              
         }
      ?>

            
<div id="slideshow">
    <img src="<?php echo $result[1]->hinh?>">
    <img src="<?php echo $result[2]->hinh?>">
    <img src="<?php echo $result[3]->hinh?>">
</div>

<div id="previous">previous</div>

<div id="next">Next</div>
      
        
  <script>
 $(function() {
    $('#slideshow img:gt(0)').hide();

    $('#previous').click(function() {
        $('#slideshow img:first').fadeOut(1000);
        $('#slideshow img:last').fadeIn(1000).prependTo('#slideshow');
    });

    $('#next').click(function() {
        $('#slideshow img:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#slideshow');
    });
});
  </script>
</body>
</html>
