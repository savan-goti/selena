<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

    protected $table = 'tbluser';
    protected $allowedFields = ['*'];
    protected $primaryKey = 'user_id';

    public function isvalidate($email,$password){

        $q = $this->where(['email'=>$email,'password'=>$password])
                    ->get('tbluser');
        if($q->num_rows()){
            return $q->row()->id;
        }else{
            return false;
        }
    }

   
}

?>