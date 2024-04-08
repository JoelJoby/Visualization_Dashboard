<?php

    class DashboardModel extends CommonModel
    {
        public function __construct()
        {
            parent::__construct();            
        }

        public function getYearEndData()
        {
            $this->db->select("end_year");
            $this->db->from("events");

            $query = $this->db->get();
		    return $query->result();
        }

        public function getTopicData()
        {
            $this->db->select("topic");
            $this->db->from("events");

            $query = $this->db->get();
            return $query->result();
        }

        public function getSectorData()
        {
            $this->db->select("sector");
            $this->db->from("events");

            $query = $this->db->get();
            return $query->result();
        }

        public function getRegionData()
        {
            $this->db->select("region");
            $this->db->from("events");

            $query = $this->db->get();
            return $query->result();
        }

        public function getPestdata()
        {
            $this->db->select("pestle");
            $this->db->from( "events" );

            $query = $this->db->get();
            return  $query->result();
        }

        public function getswotdata()
        {
            $this->db->select("swot");
            $this->db->from( "events" );

            $query = $this->db->get();
            return  $query->result();
        }

        public function getcountrydata()
        {
            $this->db->select("country");
            $this->db->from( "events" );

            $query = $this->db->get();
            return  $query->result();
        }

        public function getcitydata()
        {
            $this->db->select("city");
            $this->db->from( "events" );

            $query = $this->db->get();
            return  $query->result();
        }

    }

?>