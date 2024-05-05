<?php 

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model{
    
    protected $table = TBL_BANNER;
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','url','type','image','is_active','is_delete','created_time','updated_time'];

    
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