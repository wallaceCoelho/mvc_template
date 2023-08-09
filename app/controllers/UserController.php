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
        if(isset($request))
        {
            $storeResponse = $this->userService->store($request);
            
            echo $storeResponse ? "Cadastrado com sucesso!" : "Erro ao cadastrar!";
        }
        else echo "Erro com os valores dos campos";
    }

    public function login($request)
    {
        var_dump($request);
    }
}