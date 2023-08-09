<?php

class HomeController extends RenderView
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $this->view('home', [
            'title' => 'Home Page',
            'user' => $this->userService->show()
        ]);
    }
}