<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHP example</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="./css/normalize.min.css">
        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

<?php

$menu = [
  'index.php' => 'Главная',
  'form.php' => 'Форма',
  'scripts.php' => 'Скрипты',
];


?>

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">h1.title</h1>
                <nav>
                    <ul>
                        <?php
                            foreach($menu as $k => $v) {
                            $current_page = '/php/' . $k;
                            if ($current_page == $_SERVER['SCRIPT_NAME']) {
                            ?>
                                <li class="active"><a href="<?= $k; ?>"><?= $v; ?></a></li>
                             <?php } else { ?>
                                <li><a href="<?= $k; ?>"><?= $v; ?></a></li>
                             <?php } ?>
                        <?php      
                            }
                        ?>
                    </ul>
                </nav>
            </header>
        </div>


