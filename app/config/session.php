<?php

session_start();

function setSession($key, $value): void
{
    $_SESSION[$key] = $value;
}

function getSession($key)
{
    return $_SESSION[$key] ?? null;
}

function removeSession($key): void
{
    unset($_SESSION[$key]);
}

function destroySession(): void
{
    session_destroy();
}

function regenerateSession($force = false): void
{
    $regenerate_time = 30 * 60; // 30 minutes
    $time = time();

    if ($force || ! isset($_SESSION['last_regenerated']) || ($time - $_SESSION['last_regenerated']) >= $regenerate_time) {
        session_regenerate_id(true);
        $_SESSION['last_regenerated'] = $time;
    }
}

// Call regenerateSession at the start of the session
regenerateSession();
