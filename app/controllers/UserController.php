<?php

class UserController extends RenderView
{
    private $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index()
    {

    }

    public function show($id)
    {
        $id_user = $id[0];

        $this->view('users', ['user' => $users->fetchById($id_user)]);
    }
}