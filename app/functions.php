<?php

function dd($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    exit();
}

function urlIs($value): ?string
{
    if ($_SERVER['REQUEST_URI'] === $value) {
        return 'active';
    }

    return null;
}
