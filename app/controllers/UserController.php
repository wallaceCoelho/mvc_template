<?php

class UserController extends RenderView
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $this->view('home');
    }

    public function show($id)
    {
        $userResponse = $this->userService->showById($id);

        $this->view('users', ['user' => $userResponse]);
    }

    public function store($request)
    {
        if($request->rowCount() > 0)
        {
            $storeResponse = $this->userService->store($request);

            echo $storeResponse == true ? "Cadastrado com sucesso!" : "Erro ao cadastrar!";
        }
    }
}