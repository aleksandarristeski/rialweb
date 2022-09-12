<?php

function request_method() : string
{
    return $_SERVER['REQUEST_METHOD'];
}


function request_is(string $method) : bool
{
    return strtolower($method) === strtolower(request_method());
}


function request(string $key = null, $fallback = '')
{
    return array_extract($_POST, $key, $fallback);
}


function query(string $key = null, $fallback = '')
{
    return array_extract($_GET, $key, $fallback);
}


function array_extract(array $array, string $key = null, $fallback = '')
{
    if ($key === null) {
        return $array;
    }

    return $array[$key] ?? $fallback;
}


function request_wants_json() : bool
{
    return
        strpos($_SERVER['HTTP_ACCEPT'], '/json') ||
        strpos($_SERVER['HTTP_ACCEPT'], '+json');
}
