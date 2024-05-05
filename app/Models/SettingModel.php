<?php 

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model{
    
    protected $table = TBL_SETTING;
    protected $primaryKey = 'setting_id';
    
    protected $allowedFields = ['site_name', 'site_logo', 'favicon', 'header', 'footer', 'email', 'wa_number', 'fb_link', 'twitter_link', 'linkedin_link', 'instagram_link', 'youtube_link', 'phone', 'address', 'map_link', 'from_email', 'onesignal_app_id', 'onesignal_auth_key', 'geonames_username', 'pushsafer_key', 'sms_server_url', 'sms_api_key', 'calendar_embed_url', 'geocode_apikey', 'is_active', 'is_delete', 'created_time', 'updated_time'];
    
    public function get_row($where="1=1"){
        return $this->where($where)->first();
    }
    
    public function update_row($data, $where){
        return $this->update($where, $data);
    }
}

?>