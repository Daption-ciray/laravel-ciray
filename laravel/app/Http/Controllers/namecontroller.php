<?php

namespace App\Http\Controllers;

class namecontroller
{
    public function index()
    {
        return view("viewlike");
    }
    public function show($name)
    {
        return "Hello " . $name;
    }
}