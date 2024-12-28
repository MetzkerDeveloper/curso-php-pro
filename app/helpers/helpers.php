<?php


function dd()
{
    $args = func_get_args();

    var_dump($args);
    die();
}

function setFlash($index, $message)
{
    if (!isset($_SESSION['flash'][$index])) {
        $_SESSION['flash'][$index] =  $message;
    }
}

function getFlash($index, $style = "color:red")
{
    if (isset($_SESSION['flash'][$index])) {

        $flash = $_SESSION['flash'][$index];

        unset($_SESSION['flash'][$index]);

        return "<span style='$style'>$flash</span>";
    }
}

function user()
{
    if (isset($_SESSION[LOGGED])) {
        return $_SESSION[LOGGED];
    }
}

function logged()
{

    return isset($_SESSION[LOGGED]);
}

function isAjax():bool
{
  return   isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}