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
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    
    <div class="container">
       
        <nav class="navbar ">
            
            <ul class="nav navbar-nav">
                <li class="active">
                   Trang chu
                </li>
                <li>
                  Danh muc sach
                    <ul >
                        <div id='show_data'></div>
                    </ul>
                </li>
                <li>
                    Tin tuc
                </li>

                <li>
                    Lien he
                </li>
            </ul>
        </nav>
        
    </div>
    <script>

     function data_book(data)
     {
        var product='';
        for(var i=0; i < date.length;i++)
        {
            product+=`
                <li>${data[i].ten_loai_sach}</li>
            `
        }
        console.log(product);

     }
     String url ="http://localhost/PHP/BUOI_6_CSDL/DO_AN_NHO_6/Admin/api.php";

        URL url = new URL(uri);
        HttpURLConnection connection =
            (HttpURLConnection) url.openConnection();
        connection.setRequestMethod("GET");
        connection.setRequestProperty("Accept", "application/xml");

        InputStream xml = connection.getInputStream();

        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
        DocumentBuilder db = dbf.newDocumentBuilder();
        Document doc = db.parse(xml);
        console.log(doc);
    </script>
</body>
</html>