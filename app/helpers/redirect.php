<?php 

function redirect($to)
{
    header("Location: $to");
}

function setMessageAndRedirect($index,$message,$redirectTo)
{
    setFlash($index,$message);
    return redirect($redirectTo);
}