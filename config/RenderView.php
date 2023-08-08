<?php

class RenderView
{
    public function view($view, $args = [])
    {
        extract($args);

        require_once __DIR__."/../www/views/$view.php";
    }
}