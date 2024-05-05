<?php 

namespace App\Models;

use CodeIgniter\Model;

class TypeModel extends Model{
    
    protected $table = TBL_TYPE;
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','is_active','is_delete','created_time','updated_time'];
    
    public function get_row($where){
        return $this->where($where)->first();
    }
}

?>