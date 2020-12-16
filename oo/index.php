<?php require_once( '_init.php' ) ?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title> PHP Test </title>
        <meta type="author" value="Fredrik Skoglind, 2020" />
    </head>
    <body>
        <?php echo 'HTMLData: ', $HTMLData, '<br>', 
                   'User Input: ', htmlentities($inputColor, ENT_QUOTES), '<br>',
                   'Flower.name: ', $flower->getname(), '<br>',
                   'Flower.color: ', $flower->getColor(), '<br>',
                   'Flower.hexcolor: ', $flower->getHEXColor() ?>
    </body>
</html>