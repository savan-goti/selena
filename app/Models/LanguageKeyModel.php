<?php 

namespace App\Models;

use CodeIgniter\Model;

class LanguageKeyModel extends Model{
    
    protected $table = TBL_LANGUAGE_KEY;
    protected $primaryKey = 'id';
    protected $allowedFields = ['key','value_en','value_tr','is_active','is_delete','created_time','updated_time'];
    
    public function get_row($where){
        return $this->where($where)->first();
    }
}

?>