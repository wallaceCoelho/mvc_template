<?php

class HomeController extends RenderView
{
    private $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index()
    {
        $this->view('home', [
            'title' => 'Home Page',
            'user' => $users->fetch()
        ]);
    }
}