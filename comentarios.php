<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>


    <style type="text/css">
    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
        }

        body {
            font-size: 13px;
            height:100vh;
            width:100vw;
            overflow: hidden;
        }

        .voltar{
            position: absolute;
            top: 10px;
            left: 10px;
            font-size:15px;
        }

        .main-wrapper{
            display:flex;
            flex:1;
            background:red;
            height: 100%;
            background: #dbdbdb;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }
        .main-wrapper .span-title{
            color: #333;
            font-size: 33px;
            margin-bottom:10px;
        }

        .shadow-effect{
            border-radius: 34px;
            box-shadow: inset 5px 5px 1px #bababa, 
                    inset -5px -5px 1px #fcfcfc;
        }

        .menu-wrapper {
            height: 44%;
            width: 60%;
            display:flex;
            padding:54px 200px;
            flex-direction:column;
        }
        .menu-wrapper span{
            font-size:25px;
            margin-bottom:20px;
        }
        .menu-wrapper label{
            font-size:25px;
            margin-bottom:20px;
            color: blue;
        }


    </style>
</head>

    <body>
        <div class='main-wrapper'>
            <a href='/index.php' class='voltar'>Voltar</a>
            <span class='span-title'>Comentários em PHP</span>
            <div class='menu-wrapper shadow-effect'>

            <span>Comentário de apenas uma linha</span>
            <?php
                // Comentário de apenas uma linha
                
                # Você também pode fazer comentários de apenas uma linha assim
            ?>

            <span>Comentário em bloco</span>
            <?php
                /*
                    Comentário 
                    em 
                    bloco
                */
            ?>

            <div>
                <span>Não comentário => </span>
                    <?php echo "<label>Isso será exibito em tela</label>"; ?>
                </div>
            </div>

        </div>

    </body>
</html>