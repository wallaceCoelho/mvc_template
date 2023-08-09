<?php

class HashMiddleware
{
    public function encrypt($string)
    {
        $algorithm = 'sha256';
        return hash($algorithm, $string);
    }
}