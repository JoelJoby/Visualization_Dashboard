<?php

class CommonModel extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    }

    private function where_conditions($conditions)
	{
		if($conditions)
			$this->db->where($conditions);
	}

    public function add_data($table,$data)
	{
        $this->db->insert($table,$data);

        if($this->db->affected_rows() > 0 )
        {
            return $this->db->insert_id();
        }
        
        else
        {
            return FALSE;
        }
    }

    public function get_datas($table,$conditions,$search =[],$limit = null ,$page = null)
	{
		$this->where_conditions($conditions);

		if(!empty($search))
			$this->db->like($search);

		if($limit > 0 && $page > 0 )
		{
			$offset = ($page - 1 ) * $limit;

			$this->db->limit($limit,$offset);
		}

		$this->db->select('*');
		return $this->db->get($table)->row();
	}
}

?>
