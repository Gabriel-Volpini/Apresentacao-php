<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>


    <style type="text/css">
        body{
            position:relative;
            width:100%;
            height:100%;
            display:flex;
            flex:1;
            justify-content:center;
        }

        .voltar{
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .php-info-wrapper{

        }
    </style>
</head>

<body>
    <a href='/index.php' class='voltar'>Voltar</a>
    <div>
        <?php phpinfo(); ?>
    </div>
</body>
</html>