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
			$diff_topics = $this->dashboardModel->getDiffTopicsData();
			$diff_sector = $this->dashboardModel->getDiffSectorData();
			$diff_source = $this->dashboardModel->getDiffSourecData();

			$data = [
				'diff_sector' => $diff_sector,
				'diff_topics' => $diff_topics,
				'diff_source' => $diff_source,
			];

            $this ->loadCommonViews("dashboard",$data);         
        }

		public function trend_details($id)
		{
			$condition = array('id'=>$id);

			$trend_details = $this->CommonModel->get_datas('events',$condition);

			$this->loadCommonViews("trend_details",$trend_details);
		}

		public function get_data_list()
        {
            $prim_data = $this->dashboardModel->getPrimdData();

			$data = array(
				"data" => $prim_data
			);

            header('Content-Type: application/json');
            $dataEncode = json_encode($data);

			echo $dataEncode;
        }
	}
?>