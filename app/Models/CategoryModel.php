<?php 

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    
    protected $table = TBL_CATEGORY;
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','controller','image','bg_color','text_color','is_active','is_delete','created_time','updated_time'];

    
    public function get_row($where){
        return $this->where($where)->first();
    }
    
    public function insert_row($data){
        $this->insert($data);
        return $this->getInsertID();
    }
    
    public function update_row($data, $where){
        return $this->update($where, $data);
    }
    
}


?>