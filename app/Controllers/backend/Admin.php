<?php

namespace App\Controllers\backend;

class Admin extends BaseController
{
    public function index()
    {
        $data['view'] = 'backend/dashboard';
        $this->renderAdmin($data);
    }

    //for change password
    public function change_login_password(){
        $data['title'] = "change password";
        $data['menu'] = "change password";
        $user_id = $this->login_data['admin_id'];

        
        if ($this->request->getPost('submit')) {
            $validation = $this->validate([
                'password' => [
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => 'Password is Required',
                        'min_length' => 'Password Must Have atleast 6 chaacters in Length',
                    ]
                ],
                'confirm_pwd' => [
                    'rules' => 'required|min_length[6]|matches[password]',
                    'errors' => [
                        'required' => 'Confirm Password is Required',
                        'min_length' => 'Confirm Password Must Have atleast 6 chaacters in Length',
                        'matches' => 'Confirm Password Matches to Password'
                    ]
                ],
            ]);
    
            if(!$validation){
                $data['validation'] = $this->validator;
                $data['view'] = 'backend/users/change_login_password';
                return $this->renderAdmin($data);
            }else{
                $data = array(
                    'password' => md5($this->request->getPost('password')),
                    'visible_pass' => $this->request->getPost('password'),
                    'updated_time' => date("Y-m-d H:i:s")
                );
                $this->user->update_row($data, $user_id);
                // $session->setFlashdata('success_msg', $this->getNotification('recUpSuc'));
                return redirect()->to(base_url('backend/change_login_password'))->with('success',$this->getNotification('recUpSuc'));
            }
        }
        $data['view'] = 'backend/users/change_login_password';
        $this->renderAdmin($data);
    }
    
    //for setting
    public function system_setting(){
        $data['title'] = "Settings";
        $data['menu'] = "Settings";

        $user_id = $this->login_data['admin_id'];
        $data['rowData'] = $settingData = $this->setting->get_row();
        $data['admin_device_id'] = $this->user->getCustomName('device_id', array('user_id' => 1, 'user_role' => 1));
        if($this->request->getPost('submit')){
            $saveData = array(
                /*'footer' => $this->request->getPost('footer'),
                'header' => $this->request->getPost('header'),
                'address' => $this->request->getPost('address'),*/
                'site_name' => $this->request->getPost('site_name'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'wa_number' => $this->request->getPost('wa_number'),
                'linkedin_link' => (isset($_POST['linkedin_link']))? $this->request->getPost('linkedin_link'):"",
                'fb_link' => (isset($_POST['fb_link']))? $this->request->getPost('fb_link'):"",
                'twitter_link' => (isset($_POST['twitter_link']))? $this->request->getPost('twitter_link'):"",
                'youtube_link' => (isset($_POST['youtube_link']))? $this->request->getPost('youtube_link'):"",
                'instagram_link' => (isset($_POST['instagram_link']))? $this->request->getPost('instagram_link'):"",
                'pushsafer_key' => (isset($_POST['pushsafer_key']))? $this->request->getPost('pushsafer_key'):"",
                'sms_server_url' => (isset($_POST['sms_server_url']))? $this->request->getPost('sms_server_url'):"",
                'sms_api_key' => (isset($_POST['sms_api_key']))? $this->request->getPost('sms_api_key'):"",
                'calendar_embed_url' => (isset($_POST['calendar_embed_url']))? $this->request->getPost('calendar_embed_url'):"",
                'geocode_apikey' => (isset($_POST['geocode_apikey']))? $this->request->getPost('geocode_apikey'):"",
                // 'from_email' => $this->request->getPost('from_email'),
            );

            if(!empty($_FILES['site_logo']['name'])) {
                $image = $this->request->getFile('site_logo');
                $temp_file = $_FILES['site_logo']['tmp_name'];
                $file_name = $_FILES['site_logo']['name'];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);
                $imgname = 'site_logo_'.mt_rand(10000, 999999999) . time().'.'.$ext;
                $file_url=UPLOAD.$imgname; 
                if (isset($rowData['site_logo']) && $rowData['site_logo'] != "" && file_exists(UPLOAD . $rowData['site_logo'])) {
                    unlink(UPLOAD . $rowData['site_logo']);
                }
                $image->move(UPLOAD,$imgname);
                $saveData['site_logo']=$imgname;
            }

            if(!empty($_FILES['favicon']['name'])) {
                $image = $this->request->getFile('favicon');
                $temp_file = $_FILES['favicon']['tmp_name'];
                $file_name = $_FILES['favicon']['name'];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);
                $imgname = 'favicon_'.mt_rand(10000, 999999999) . time().'.'.$ext;
                $file_url=UPLOAD.$imgname; 
                if (isset($rowData['favicon']) && $rowData['favicon'] != "" && file_exists(UPLOAD . $rowData['favicon'])) {
                    unlink(UPLOAD . $rowData['favicon']);
                }
                $image->move(UPLOAD,$imgname);
                $saveData['favicon']=$imgname;
            }
            
            $this->setting->update_row($saveData, array('setting_id' =>  $settingData['setting_id']));

            $admin_device_id = (isset($_POST['admin_device_id']))? $this->request->getPost('admin_device_id'):"";
            if(!empty($admin_device_id)){
                $this->user->update_row(array('device_id'=> $admin_device_id, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' => 1, 'user_role' => 1));
            }
            return redirect()->to(base_url('backend/system_setting'));
        }
        $data['view'] = 'backend/setting/system_setting';
        $this->renderAdmin($data);
    }
}
