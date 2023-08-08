<?php

class Layouts {

    public static function PageHeader($title) { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <base href="<?= Init::base_path() ?>/">
            <link rel="stylesheet" href="assets/dist/css/main.css">
            <title><?= $title ?></title>
        </head>
        <body>
    <?php
    }

    public static function PageFooter() { ?>
        </body>
        </html>
    <?php
    }
    
}