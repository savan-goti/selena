<?php

namespace App\Controllers\backend;


class Category extends BaseController
{

    public function index()
    {
        $data['menu']='Category';
        $data['title']='Category';

        $data['view'] = 'backend/category/page_list';
        $this->renderAdmin($data);
    }
    
    public function getAjaxListData() {
        $filter = array();
        $this->get_table_data('category',$filter); //table name
    }
    
    public function add($id=''){
    
        $data['menu']='ADD Category';
        $data['title']='ADD Category';

        
        $data['type']=$this->type->where(array('is_active'=>1,'is_delete'=>0))->findAll();
        // pr($data['type']);die;

        if($id!=''){
            $data['menu']='EDIT Category';
            $data['title']='EDIT Category';
            $data['rowData']=$rowData= $this->category->get_row(array('id'=>$id));
            // pr($rowData);die;
        }

        if(!empty($this->request->getPost('submit'))){
            // pr($_POST);die;
            $saveData=array(
                'title'=>$this->request->getPost('title'),
                'controller'=>$this->request->getPost('controller'),
                'bg_color'=>$this->request->getPost('bg_color'),
                'text_color'=>$this->request->getPost('text_color'),
                'updated_time'=>date('Y-m-d H:i:s'),
            );
            $image = $this->request->getFile('image');
            if(!empty($_FILES['image']['name'])) {
                $temp_file = $_FILES['image']['tmp_name'];
                $file_name = $_FILES['image']['name'];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);
                $imgname = 'picture_'.time().'.'.$ext;
                $file_url=CATEGORY.$imgname; 
                if (isset($rowData['image']) && $rowData['image'] != "" && file_exists(CATEGORY . $rowData['image'])) {
                    unlink(CATEGORY . $rowData['image']);
                }
                $image->move(CATEGORY,$imgname);
                $saveData['image']=$imgname;
            }
            if(!empty($id)){
                $this->category->update($id, $saveData);
                // $this->session->set_flashdata('success_msg', $this->getNotification('recUpSuc'));
            }else{
                $saveData['created_time'] = date("Y-m-d h:i:s");
                $this->category->insert($saveData);
                $this->category->getInsertID();
                // $this->session->set_flashdata('success_msg', $this->getNotification('recAddSuc'));
            }

            // $this->session->set_flashdata('success_msg', ' Successfully banner image Upload');
            return redirect()->to(base_url('backend/category'));
            

        }
        $data['view'] = 'backend/category/page_edit';
        $this->renderAdmin($data);
    }
    
    public function delete(){
        $id = $this->request->getPost('record_id');
        if($this->category->update_row(array('is_delete'=> 1, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

    public function change_status() {
        $id = $this->request->getPost('record_id');
        $status = $this->request->getPost('status');
        if($this->category->update_row(array('is_active'=> $status, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

}
