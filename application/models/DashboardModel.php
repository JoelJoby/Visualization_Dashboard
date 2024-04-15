<?php

    class DashboardModel extends CommonModel
    {
        public function __construct()
        {
            parent::__construct();            
        }

        public function getPrimdData()
        {
            $this->db->select('ID,sector,topic,source,insight');
            $this->db->from("events");
            // $this->db->limit(10);

            $query = $this->db->get();
		    return $query->result();
        }

        public function getDiffTopicsData()
        {
            $this->db->select('topic');
            $this->db->distinct();
            $this->db->from( 'events' );
            $this->db->where('topic !=', ''); 

            $query = $this->db->get();
            return  $query->result();
        }

        public function getDiffSectorData()
        {
            $this->db->select('sector');
            $this->db->distinct();
            $this->db->from( 'events' );
            $this->db->where('sector !=', ''); 

            $query = $this->db->get();
            return  $query->result();
        }

        public function getDiffSourecData()
        {
            $this->db->select('source');
            $this->db->distinct();
            $this->db->from( 'events' );
            // $this->db->limit(2);
            $this->db->where('source !=', ''); 

            $query = $this->db->get();
            return  $query->result();
        }
    }
?>