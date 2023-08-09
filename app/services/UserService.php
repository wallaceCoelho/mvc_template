<?php

class UserService 
{
    private $userModel;
    private $hash;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->hash = new HashMiddleware();
    }

    public function showById($id)
    {
        return $this->userModel->fetchById($id[0]);
    }

    public function show()
    {
        return $this->userModel->fetch();
    }

    public function store($request)
    {
        return $this->userModel->store([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => $this->hash->encrypt($request['password'])
        ]);
    }
}