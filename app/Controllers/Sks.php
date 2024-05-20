<?php

namespace App\Controllers;

class Sks extends BaseController
{
    public function index()
    {
        return "Hello World!";
    }

    public function show($id)
    {
        return "Show page $id";
    }

    public function create()
    {
        return "create new page";
    }

}
