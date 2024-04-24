<?php

namespace App\Controllers\backend;

class Auth extends BaseController
{
    public function __construct() {
        // parent::__construct();
    }

    public function index()
    {
        // if ($this->session->has_userdata('is_admin_login')) {
        //     return base_url('backend/dashbord');
        // } else {
        //     return base_url('login');
        // }
    }

    public function login()
    {
        // pr('test');die;

        // if ($this->session->has_userdata('is_admin_login')) {
        //     redirect('backend/dashbord');
        // }
        return view('backend/auth/login');
    }
    
    public function save()
    {
        echo 'test';die;

        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[registration.email]',
                'errors' => [
                    'required' => 'E-Mail is Required',
                    'valid_email' => 'You Must Enter a Valid E-Mail',
                    'is_not_unique' => 'This E-Mail Is Not Registered on our Service'
                ]
                ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'password is Required',
                    'min_length' => 'password Must Have atleast 5 chaacters in Length',
                    'max_length' => 'password Must Not Have chaacters More Than 12 in Length'
                ]
            ]
        ]);

        if(!$validation){
            return view('admin/login',['validation'=> $this->validator]);
        }else{

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $usermodel = new LoginModel();
            $user_info = $usermodel->where('email',$email)->first();
            $chack_password = Hash::check($password, $user_info['password']);

            if($chack_password){

                $user_id = $user_info['id'];
                session()->set('loggedUser',$user_id);

                return redirect()->to('/dashbord');
            }else{
                session()->setFlashdata('faile','Incorrect Password');
                return redirect()->to('/login')->withInput();
            }
        }
    }
}
