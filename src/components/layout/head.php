<?php
/**
 * The head component generates the <head> element and its contents.
 */

// Format the camelCase page name to space separated words.
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$pageName = ucwords(preg_replace('/(?<!^)[A-Z]/', ' $0', $pageName));
$head = <<<EOT
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/build/main.css" />
    <title>$pageName | Thoth</title>
</head>
EOT;
echo $head;