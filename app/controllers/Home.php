<?php

namespace app\controllers;

class Home
{
    public function index($params)
    {

        if (!logged()) {
            redirect('/login');
            return;
        }

        $users = all('users');
        $title = 'Home';

        return [
            'view' => 'home',
            'data' => compact('title', 'users')
        ];

    }
}
