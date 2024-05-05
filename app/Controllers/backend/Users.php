<?php

namespace App\Controllers\backend;

class Users extends BaseController
{
    public function index()
    {
        $data['menu']='Users';
        $data['title']='Users';

        $data['view'] = 'backend/users/user_list';
        $this->renderAdmin($data);
    }
    
    public function getAjaxListData() {
        $filter = array();
        $this->get_table_data('user',$filter); //table name
    }
    
    public function add($user_id=''){
    
        $data['menu']='Add Users';
        $data['title']='Add Users';

        $data['user_role_list']=$this->user_role->get_all(array('id !='=>1,'is_active'=>1,'is_delete'=>0));
        // pr($data['type']);die;

        if($user_id!=''){
            $data['menu']='Edit Users';
            $data['title']='Edit Users';
            $data['rowData']=$rowData= $this->user->get_row(array('user_id'=>$user_id));
            // pr($rowData);die;
        }

        if(!empty($this->request->getPost('submit'))){
            $saveData = array(
                'name' => $this->request->getPost('name'),
                'last_name' => $this->request->getPost('last_name'),
                'email' => $this->request->getPost('email'),
                'mobile' => $this->request->getPost('mobile'),
                'address' => $this->request->getPost('address'),
                'dob' => $this->request->getPost('dob'),
                'pincode' => $this->request->getPost('pincode'),
                'city' => $this->request->getPost('city'),
                'user_role' => $this->request->getPost('user_role'),
                'notes' => (isset($_POST['notes'])) ? $this->request->getPost('notes'):"",
                'is_active' => $this->request->getPost('is_active'),
                'updated_time' => date("Y-m-d H:i:s"),
            );
            
            $password = (!empty($_POST['password'])) ? $this->request->getPost('password'):$this->user->generateRandomString();
            $saveData['password'] = md5($password);
            $saveData['visible_pass'] = $password;

            // pr($saveData);die;

            if(!empty($_FILES['picture']['name'])) {
                $image = $this->request->getFile('picture');
                $temp_file = $_FILES['picture']['tmp_name'];
                $file_name = $_FILES['picture']['name'];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);
                $imgname = "picture_" . mt_rand(10000, 999999999) . time().'.'.$ext;
                $file_url=PICTURE.$imgname; 
                if (isset($rowData['picture']) && $rowData['picture'] != "" && file_exists(PICTURE . $rowData['picture'])) {
                    unlink(PICTURE . $rowData['picture']);
                }
                $image->move(PICTURE,$imgname);
                $saveData['picture']=$imgname;
            }

            if(!empty($user_id)){
                $this->user->update($user_id, $saveData);
                // $this->session->set_flashdata('success_msg', $this->getNotification('recUpSuc'));
            }else{
                $saveData['created_time'] = date("Y-m-d h:i:s");
                $this->user->insert_row($saveData);
                // $this->session->set_flashdata('success_msg', $this->getNotification('recAddSuc'));
            }

            // $this->session->set_flashdata('success_msg', ' Successfully users image Upload');
            return redirect()->to(base_url('backend/users'));
            

        }
        $data['view'] = 'backend/users/user_edit';
        $this->renderAdmin($data);
    }
    
    public function delete(){
        $id = $this->request->getPost('record_id');
        if($this->user->update_row(array('is_delete'=> 1, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

    public function change_user_status() {
        $id = $this->request->getPost('record_id');
        $status = $this->request->getPost('status');
        if($this->user->update_row(array('is_active'=> $status, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

}
