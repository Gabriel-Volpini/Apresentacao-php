<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

    <body>
    <?php
        require "a/src/autoload.php";

        $game = new Game();
        $game->start();
    ?>
    </body>
</html> 