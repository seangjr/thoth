<?php
/**
 * The head component generates the <head> element and its contents.
 */

function generateHead(string $title): void
{
    $head = <<<EOT
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bundle.css" />
        <title>$title | Thoth</title>
    </head>
    EOT;
    echo $head;
}