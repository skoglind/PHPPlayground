<?php

    // Author, Fredrik Skoglind, 2020

    // Visa alla PHP-Fel
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Ladda in klasser
    require_once( 'class/flower.php' );
    require_once( 'class/color.php' );

    // Indata
    $inputColor = isset($_GET[ 'color' ]) ? $_GET[ 'color' ] : '';

    // Initiera klasser
    $flower = new Flower( 'Maskros' );
    $flower->setColor( $inputColor );

    // Data att rendera
    $HTMLData = 'Test';

?>