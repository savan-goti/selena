<?php

namespace App\Controllers\backend;

class Admin extends BaseController
{
    public function index()
    {
        $data['view'] = 'backend/dashboard';
        $this->renderAdmin($data);
    }
}
