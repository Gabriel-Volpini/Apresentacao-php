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
        .main-wrapper span{
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
            height: 54%;
            width: 60%;
            display:flex;
            padding:54px 200px;
            flex-direction:column;
        }

        .menu-wrapper a {
            font-size: 22px;
            text-decoration: none;
            color: #333;
        }

        .dash{
            box-shadow:  1px 1px 0px #585858, 
             -1px -1px 0px #ffffff;
            height: 6px;
            width: 28px;
            margin-right: 10px;
            margin-top: 9px;
        }

        .option{
            display:flex;
            flex-direction:row;
            margin-bottom:10px;
        }

    </style>
</head>

<body>
    <div class='main-wrapper'>
        <span>Apresentação sobre PHP</span>
        <div class='menu-wrapper shadow-effect'>

            <div class='option'>
                <div class='dash'></div>
                <a href='/info.php'>PHP Informações</a>
            </div>

            <div class='option'>
                <div class='dash'></div>
                <a href='/comentarios.php'>Comentários na linguagem</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a href='/caseSensitive.php'>Case sensitive</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a href='/variaveis.php'>Exemplos com variaveis</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a href='/classe.php'>Exemplos com classe</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a href='/loop.php'>Exemplos de estrutura de repetição</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a href='/form.php'>Exemplos de manipulação de html</a>
            </div>

            <div class='option'>
                <div class='dash'></div>
                <a href='/calc.php'>Calculadora</a>
            </div>

            <div class='option'>
                <div class='dash'></div>
                <a href='/jogoVelha.php'>Jogo da velha</a>
            </div>


            <div class='option'> 
                <div class='dash'></div>
                <a target="_blank" href='https://woocommerce.com/'>WooCommerce</a>
            </div>
            <div class='option'>
                <div class='dash'></div>
                <a target="_blank" href='https://br.wordpress.com/'>Wordpress</a>
            </div>
           
        </div>
    </div>
</body>
</html>