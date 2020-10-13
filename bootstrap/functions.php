<?php

function p(...$args)
{
    echo '<pre>';
    foreach ($args as $arg) {
        print_r($arg);
        echo "\n\n";
    }
    echo '</pre>';
}

function pd(...$args)
{
    p(...$args);
    die;
}
