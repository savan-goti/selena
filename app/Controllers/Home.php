<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['bannerData']=$this->banner->where(array('is_active'=>1,'is_delete'=>0))->findAll();
        $data['categoryData']=$this->category->where(array('is_active'=>1,'is_delete'=>0))->findAll();

        $data['view'] = 'web/index';
        $this->render($data);
    }

    public function login()
    {
        $data['view'] = 'web/login-register';
        $this->render($data);
    }
}
