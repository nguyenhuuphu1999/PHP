<?php

    if(isset($_POST['sm']))
    {
        $thang = $_POST['month'];
         $nam = $_POST['year'];
         echo $nam;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In lịch</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <form action="" method="POST" role="form">
        
      
    <table class="table table-hover">
        <thead>
            <tr>
                <th col=2>IN LỊCH</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Chọn tháng</td>
                <td><input type="number" name="month" id=""></td>
            </tr>
            <tr>
                <td>Chọn Năm</td>
                <td><input type="number" name="year" id=""></td>
            </tr>
        </tbody>
    </table>
    

        
    
        <button type="submit" name="sm" class="btn btn-primary">In lich</button>
    </form>
    
    
    


    
    <div class="container">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tháng <?php if(isset($thang)) echo $thang?> Năm <?php if(isset($nam)) echo $nam?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sun</td>
                    <td>Mon</td>
                    <td>Tue</td>
                    <td>Wed</td>
                    <td>Thu</td>
                    <td>Fri</td>
                    <td>Sat</td>    
                </tr>
                <tr>
                    <td><?php ?> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>    
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>    
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>    
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>    
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>    
                </tr>
            </tbody>
        </table>
        
    </div>
    
    
</body>
</html>