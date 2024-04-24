<?php

namespace App\Controllers\backend;

class Admin extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
