<?php
	
	class DashboardController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function loadCommonViews($page)
		{
			$this->load->view("template/header");
			$this->load->view("template/sidebar");
			$this->load->view($page);
			$this->load->view("template/footer");
		}

		public function index()
        {            
            $this -> loadCommonViews("dashboard");            
        }
	}
?>