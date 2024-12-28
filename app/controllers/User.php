<?php

namespace app\controllers;

class User
{
    public function create()
    {
        $title = 'Create';

        return [
            'view' => 'create',
            'data' => compact('title')
        ];
    }

    public function show($params)
    {
        if (!isset($params['user'])) {
            return redirect('/');
        }

        $user =  findBy('users', 'id', $params['user']);
        $title = 'Show';

        return [
            'view' => 'show',
            'data' => compact('title', 'user')
        ];
    }

    public function store()
    {
        $validate = validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|maxlen:8',
        ]);

        if (!$validate) {
            return redirect('/user/create');
        }

        $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

        $created = create('users', $validate);

        if (!$created) {
            setFlash("message", "Ocorreu algum erro ao tentar cadastrar! Tente novamente.");
            return redirect('/user/create');
        }

        return redirect('/');

    }

    public function edit($params)
    {

        if (!isset($params['user'])) {
            return redirect('/');
        }

        $user =  findBy(
            'users',
            'id',
            $params['user']
        );

        if (!isset($user)) {
            setFlash("message", "Não foi localizado o usuário solicitado, 
                                corrija os dados e tente novamente!");
            redirect('/');
        }

        $title = 'Edit';

        return [
            'view' => 'edit',
            'data' => compact('title', 'user')
        ];

    }

    public function update()
    {
        $id = $_POST['id'];
        
        $user =  findBy(
            'users',
            'id',
            $id
        );

        $data = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'password' => empty($_POST['password']) ? $user->password :  password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        
        
        $updated = update(
            'users',
            $data,
            ['id' => $id]
        );

        if (!$updated) {
            setFlash("message", "Ocorreu algum erro ao atualizar o usuário!");
            return redirect("/edit/user/{$id}");
        }

        setFlash("message", "Usuário atualizado com sucesso!");
        return redirect("/edit/user/{$id}");

    }

    public function delete($params)
    {

        if (!isset($params['user'])) {
            return redirect('/');
        }

        $user =  findBy(
            'users',
            'id',
            $params['user']
        );

        if (!isset($user)) {
            setFlash("message", "Não foi localizado o usuário solicitado, 
                                corrija os dados e tente novamente!");
            redirect('/');
        }

        $deleted = delete(
                'users',
                ['id' =>  $user->id]
        );

        if(!$deleted){
            setFlash("message", "Ocorreu algum erro ao deletar o usuário!");
            return redirect('/');
        }

        setFlash("message", "Usuário deletado com sucesso!");
        return redirect('/');


    }

}
