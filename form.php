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

        .myButton {
            box-shadow:inset 0px -3px 7px 0px #29bbff;
            background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
            background-color:#2dabf9;
            border-radius:3px;
            border:1px solid #0b0e07;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:15px;
            padding:9px 23px;
            text-decoration:none;
            text-shadow:0px 1px 0px #263666;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
            background-color:#0688fa;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }

    </style>
</head>

    <body>
        <div class='main-wrapper'>
            <a href='/index.php' class='voltar'>Voltar</a>
            <span class='span-title'>Formulario simples</span>
            <div class='menu-wrapper shadow-effect'>

                <?php
                    if(array_key_exists('button1', $_POST)) { 
                        button1(); 
                    } 
                    else if(array_key_exists('button2', $_POST)) { 
                        button2(); 
                    } else {
                        nenhum();
                    }

                    function button1() { 
                        echo "<label>O botão numero 1 foi pressionado</label>"; 
                    } 
                    function button2() { 
                        echo "<label>O botão numero 2 foi pressionado</label>"; 
                    }

                    function nenhum(){
                        echo "<label>Nenhum botão foi pressionado</label>";
                    } 
                ?> 
        
                <form method="post"> 
                    <button name="button1" class="myButton" value="Button1" >Botão 1</button>
                    
                    <button name="button2" class="myButton" value="Button2" >Botão 2</button>
                </form> 
            </div>
        </div>

    </body>
</html>