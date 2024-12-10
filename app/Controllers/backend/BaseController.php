<?php

namespace App\Controllers\backend;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\URL;
use Psr\Log\LoggerInterface;


use App\Models\BannerModel;
use App\Models\TypeModel;
use App\Models\UserModel;
use App\Models\UserRoleModel;
use App\Models\SettingModel;
use App\Models\LanguageModel;
use App\Models\LanguageKeyModel;
use App\Models\CategoryModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    public function __construct()
    {
        $this->viewPath = realpath(APPPATH . 'views');
        
        $this->type = new TypeModel();
        $this->banner = new BannerModel();
        $this->user = new UserModel();
        $this->user_role = new UserRoleModel();
        $this->setting = new SettingModel();
        $this->language = new LanguageModel();
        $this->language_key = new LanguageKeyModel();
        $this->category = new CategoryModel();

        $this->login_data = session()->get('admin_login');
    }

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
    
    public function renderAdmin($data=""){
        // pr($data);die;
        echo view('backend/layout/header', $data);
        echo view('backend/layout/sidebar', $data);
        echo view('backend/layout/navbar', $data);
        
        if(!empty($data['view'])){
            if(is_array($data['view'])){
                foreach($data['view'] as $view){
                    echo view($view);
                }
            }else{
                echo view($data['view']);
            }
        }
        echo view('backend/layout/footer', $data);
    }

    
    protected function get_table_data($table, $params = [], $is_front=false)
    {
        foreach ($params as $key => $val) {
            $$key = $val;
        }
        $customFieldsColumns = [];
        if($is_front){
            $path = realpath(APPPATH . 'views').'/front/tables/' . $table . '.php';
            if (file_exists(realpath(APPPATH . 'views') . 'front/tables/my_' . $table . '.php')) {
                $path = realpath(APPPATH . 'views') . 'front/tables/my_' . $table . '.php';
            }
        }else{
            $path = realpath(APPPATH . 'views').'/backend/tables/' . $table . '.php';
            if (file_exists(realpath(APPPATH . 'views') . '/backend/tables/my_' . $table . '.php')) {
                $path = realpath(APPPATH . 'views') . '/backend/tables/my_' . $table . '.php';
            }
        }
        include_once($path);
        echo json_encode($output);
        exit;
    }
    
    public function getNotification($key=""){
        $result = "No notification found";
        if(!empty($key)){
            $notificationData = $this->language_key->get_row(array('is_active' => 1,'key' => $key));
            if(!empty($notificationData)){
                $result = $notificationData['value_en'];
            }
        }
        return $result;
    }
    
}
