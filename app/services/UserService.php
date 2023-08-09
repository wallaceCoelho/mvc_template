<?php

class UserService 
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showById($id)
    {
        $id_user = $id[0];

        return $this->userModel->fetchById($id_user);
    }

    public function show()
    {
        return $this->userModel->fetch();
    }

    public function store($request)
    {
        return $this->userModel->store($request);
    }
}