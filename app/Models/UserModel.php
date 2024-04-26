<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $table = 'registration';
    protected $allowedFields = ['name','email','password','phone','gender'];
}

?>