<?php

return [

 'POST' => [
    '/login' => 'Login@store',
    '/user/store' => 'User@store',
    '/user/update' => 'User@update',
 ],
 'GET'  => [
   '/login' => 'Login@index',
    '/' => 'Home@index',
    '/user/create' => 'User@create',
    '/user/[0-9]+' => 'User@show',
    '/edit/user/[0-9]+' => 'User@edit',
    '/delete/user/[0-9]+' => 'User@delete',
    'logout' => 'Login@destroy'
 ]

];
