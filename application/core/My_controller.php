<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS,POST");

defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');


class Base_controller extends CI_Controller
{
    public $user_data;
    public $page;
    public $page_title;
    public $current_page;
    public $breadcrumbs;
    
    function __construct()
    {
        parent::__construct();
    }

    public function load_breadcrumbs()
    {
        $this->breadcrumbs = $this->breadcrumbs->show();
    }

}

class Admin_Controller extends Base_controller
{
    public $datatable;
    public $from_type ='form';

    function __construct()
    {
        parent:: __construct();
        
    }

}