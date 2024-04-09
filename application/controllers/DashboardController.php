<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	use Ozdemir\Datatables\Datatables;
	use Ozdemir\Datatables\DB\CodeigniterAdapter;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	class DashboardController extends Admin_Controller
	{
		public $datatable;

		function __construct()
		{
			parent::__construct();

			$this->load->model('CommonModel');
			$this->load->model('DashboardModel', 'dashboardModel');
			$this->load_data_table();
		}

		private function load_data_table()
		{
			require_once APPPATH.'third_party/ozdemir-datatable/vendor/autoload.php';
			$this->datatable = new Datatables(new CodeigniterAdapter);
		}

		public function loadCommonViews($page,$data)
		{
			$this->load->view("template/header");
			$this->load->view("template/sidebar");
			$this->load->view($page,compact("data"));
			$this->load->view("template/footer");
		}

		public function index()
        {   
			//data by column  
			$year_end = $this->dashboardModel->getYearEndData();    
			$topic_data = $this->dashboardModel->getTopicData();
			$sector_data = $this->dashboardModel->getSectorData();
			$region_data = $this->dashboardModel->getRegionData();
			$pest_data = $this->dashboardModel->getPestdata();
			$swot_data = $this->dashboardModel->getswotdata();
			$country_data = $this->dashboardModel->getcountrydata();
			$city_data = $this->dashboardModel->getcitydata();

			//data for Filter
			$diff_endyear = $this->dashboardModel->getDiffEndyearData();
			$diff_topics = $this->dashboardModel->getDiffTopicsData();
			$diff_sector = $this->dashboardModel->getDiffSectorData();
			$diff_region = $this->dashboardModel->getDiffRegionData();
			$diff_pest = $this->dashboardModel->getDiffPestData();			
			$diff_source = $this->dashboardModel->getDiffSourecData();

			// print_r($diff_pest); exit; 

			$data = [
				'diff_sector' => $diff_sector,
				'diff_topics' => $diff_topics,
				'diff_source' => $diff_source,
			];

			// print_r($data);exit;

            $this ->loadCommonViews("dashboard",$data); 

            // $this ->loadCommonViews("dashboard",['pestle'=>$diff_pest]);            
        }

		public function get_joel_list()
        {
            // $prim_data = $this->dashboardModel->getPrimdData($this->datatable);

			// $this->output->set_output($this->datatable->generate());

            $prim_data = $this->dashboardModel->getPrimdData();
            
            header('Content-Type: application/json');
            echo json_encode($prim_data);
        }

		public function get_trent_list()
        {
            // $prim_data = $this->dashboardModel->getPrimdData($this->datatable);
			// $this->output->set_output($this->datatable->generate());

            $prim_data = $this->dashboardModel->getPrimdData();

			$data = array(
				"data" => $prim_data
			);

			// $data = array("data" => $prim_data);

            header('Content-Type: application/json');
            $dataencode = json_encode($data);

			echo $dataencode;
        }
	}
	

?>