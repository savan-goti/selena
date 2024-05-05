<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model{
    
    protected $table = TBL_USER_ROLE;
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','role_type', 'is_admin','is_active', 'is_delete', 'created_time', 'updated_time'];
    
    public function get_all($where){
        return $this->where($where)->findAll();
    }
    
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