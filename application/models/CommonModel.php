<?php

class CommonModel extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
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
}

?>
