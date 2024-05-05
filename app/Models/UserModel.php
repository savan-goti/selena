<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $table = TBL_USERS;
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username', 'name', 'last_name', 'email', 'mobile', 'gender', 'dob', 'address', 'pincode', 'picture', 'password', 'visible_pass', 'user_role', 'register_role', 'otp', 'country_id', 'city', 'access_token', 'reset_slug', 'device_type', 'device_token', 'is_active', 'is_delete', 'created_time', 'updated_time', 'web_device_id', 'device_id', 'last_login', 'notes'];
    
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
    
    public function generateRandomString($alpha = true, $nums = true, $usetime = false, $string = '', $length = 10) {
        $alpha = ($alpha == true) ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : '';
        // $alpha = ($alpha == true) ? 'abcdefghijklmnopqrstuvwxyz' : '';
        $nums = ($nums == true) ? '1234567890' : '';
        
        if ($alpha == true || $nums == true || !empty($string)) {
            if ($alpha == true) {
                $alpha = $alpha;
                $alpha .= strtoupper($alpha);
            } 
        }
        $randomstring = '';
        $totallength = $length;
            for ($na = 0; $na < $totallength; $na++) {
                    $var = (bool)rand(0,1);
                    if ($var == 1 && $alpha == true) {
                        $randomstring .= $alpha[(rand() % mb_strlen($alpha))];
                    } else {
                        $randomstring .= $nums[(rand() % mb_strlen($nums))];
                    }
            }
        if ($usetime == true) {
            $randomstring = $randomstring.time();
        }
        return($randomstring);
    }

    public function getCustomName($column, $where) {
        $result = "";
        $rowData = $this->where($where)->first();
        if(!empty($rowData)){
            $result = (!empty($column))?$rowData[$column]:"";
        }
        return $result;
    }
}

?>