<?php

namespace App\Controllers\backend;


class Banner extends BaseController
{
    public function __construct() {
    }

    public function index()
    {
        $data['menu']='BANNER';
        $data['title']='BANNER';

        $data['view'] = 'backend/banner/page_list';
        $this->renderAdmin($data);
    }
    
    public function getAjaxListData() {
        $filter = array();
        $this->get_table_data('banner',$filter); //table name
    }
    
    public function add($id=''){
    
        $data['menu']='ADD BANNER';
        $data['title']='ADD BANNER';

        $data['type']=$this->type->where(array('is_active'=>1,'is_delete'=>0))->findAll();
        // pr($data['type']);die;

        if($id!=''){
            $data['menu']='EDIT BANNER';
            $data['title']='EDIT BANNER';
            $data['rowData']=$rowData= $this->banner->get_row(array('id'=>$id));
            // pr($rowData);die;
        }

        if(!empty($this->request->getPost('submit'))){
            $saveData=array(
                'title'=>$this->request->getPost('title'),
                'type'=>$this->request->getPost('type'),
                'url'=>$this->request->getPost('url'),
                'updated_time'=>date('Y-m-d H:i:s'),
            );
            $image = $this->request->getFile('image');
            if(!empty($_FILES['image']['name'])) {
                $temp_file = $_FILES['image']['tmp_name'];
                $file_name = $_FILES['image']['name'];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);
                $imgname = 'picture_'.time().'.'.$ext;
                $file_url=BANNER.$imgname; 
                if (isset($rowData['image']) && $rowData['image'] != "" && file_exists(BANNER . $rowData['image'])) {
                    unlink(BANNER . $rowData['image']);
                }
                $image->move(BANNER,$imgname);
                $saveData['image']=$imgname;
            }
            if(!empty($id)){
                $this->banner->update($id, $saveData);
                // $this->session->set_flashdata('success_msg', $this->getNotification('recUpSuc'));
            }else{
                $saveData['created_time'] = date("Y-m-d h:i:s");
                $this->banner->insert($saveData);
                $this->banner->getInsertID();
                // $this->session->set_flashdata('success_msg', $this->getNotification('recAddSuc'));
            }

            // $this->session->set_flashdata('success_msg', ' Successfully banner image Upload');
            return redirect()->to(base_url('backend/banner'));
            

        }
        $data['view'] = 'backend/banner/page_edit';
        $this->renderAdmin($data);
    }
    
    public function delete(){
        $id = $this->request->getPost('record_id');
        if($this->banner->update_row(array('is_delete'=> 1, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

    public function change_status() {
        $id = $this->request->getPost('record_id');
        $status = $this->request->getPost('status');
        if($this->banner->update_row(array('is_active'=> $status, 'updated_time'=> date("Y-m-d H:i:s")), array('user_id' =>$id))){
            echo '1';
        }else{
            echo '0';
        }
    }

}
