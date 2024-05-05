<?php 

namespace App\Models;

use CodeIgniter\Model;

class LanguageModel extends Model{
    
    protected $table = TBL_LANGUAGE;
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','key','is_active','is_delete','created_time','updated_time'];
    
    public function get_row($where){
        return $this->where($where)->first();
    }
}

?>