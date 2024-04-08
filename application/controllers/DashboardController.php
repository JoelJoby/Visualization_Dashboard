<?php

	class DashboardController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			$this->load->model('CommonModel');
			$this->load->model('DashboardModel', 'dashboardModel');
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
			$year_end = $this->dashboardModel->getYearEndData();    
			$topic_data = $this->dashboardModel->getTopicData();
			$sector_data = $this->dashboardModel->getSectorData();
			$region_data = $this->dashboardModel->getRegionData();
			$pest_data = $this->dashboardModel->getPestdata();
			$swot_data = $this->dashboardModel->getswotdata();
			$country_data = $this->dashboardModel->getcountrydata();
			$city_data = $this->dashboardModel->getcitydata();

			// print_r($city_data); exit; 

            $this -> loadCommonViews("dashboard");            
        }
	}

?>