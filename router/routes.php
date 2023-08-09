<?php

$routes = [
    '/' => 'HomeController@index',
    '/signin' => 'UserController@signin',
    '/login/{$request}' =>'UserController@login'
];