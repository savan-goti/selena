<?php

namespace App\Controllers\backend;

use App\Models\LoginModel;

class Auth extends BaseController
{
    public function __construct()
    {
        // helper(['url','form']);
    }

    public function index()
    {
        return redirect()->to(BASE_URL.'backend');
    }

    public function login()
    {
        if(!empty($this->request->getPost('submit'))){
            $rule = [
                'email'   => 'required|valid_email',
                'password' => 'required|min_length[5]|max_length[12]',
            ];
    
            if(!$this->validate($rule)){
                return view('backend/auth/login',['validation'=> $this->validator]);
            }else{
    
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $loginmodel = new LoginModel();

                $data = array(
                    'email' => $email,
                    'password' => $password
                );
                
                $userData = $loginmodel->where('email',$email)->first();

                if(!empty($userData)){
                    if((md5($data['password']) == $userData['password'] && $userData['user_role']=='1' && $userData['is_active']=='1' && $userData['is_delete']=='0' )){
                        $admin_data = array(
                            'admin_id' => $userData['user_id'],
                            'username' => $userData['username'],
                            'name' => $userData['name'].' '.$userData['last_name'],
                            'email' => $userData['email'],
                            'is_admin_login' => TRUE,
                            'user_type' => 1,
                        );
                        session()->set('admin_login',$admin_data);
                        return redirect()->to(BASE_URL.'backend/dashboard');
                    }else{
                        return view('backend/auth/login',['msg'=> 'Incorrect Password']);
                    }
                }else{
                    return view('backend/auth/login',['msg'=> 'Incorrect Email Or Password']);
                }
            }
        }

        return view('backend/auth/login');
    }
    
    public function logout(){
        if(session()->get('admin_login')){
            session()->remove('admin_login');
            return redirect()->to(BASE_URL.'backend/login')->with('faile','Your are Logged out!');
        }
    }

}
