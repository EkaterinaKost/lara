<?php

namespace App\Services;

class CustomLogDbService implements CustomLogServiceInterface
{
    protected $queryBilder;

    public function __construct($queryBilder)
    {
        $this->queryBilder = $queryBilder;
    }
    public function rotateLogs()
    {
        $this->queryBilder->where('id','<', '1000')->delete();
    }
}