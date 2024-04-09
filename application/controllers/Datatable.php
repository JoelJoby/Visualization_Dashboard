<?php

    class Datatable extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

			$this->load->model('CommonModel');
			$this->load->model('DashboardModel', 'dashboardModel');            
        }

    }

?>