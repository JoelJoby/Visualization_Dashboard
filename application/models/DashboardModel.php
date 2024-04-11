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

        public function getDiffEndyearData()
        {
            $this->db->select('end_year');
            $this->db->distinct();
            $this->db->from( 'events' );
            $this->db->where('end_year !=', ''); 

            $query = $this->db->get();
            return  $query->result();
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

        public function getDiffRegionData()
        {
            $this->db->select('region');
            $this->db->distinct();
            $this->db->from( 'events' );
            $this->db->limit(2);
            $this->db->where('region !=', ''); 

            $query = $this->db->get();
            return  $query->result();
        }

        public function getDiffPestData()
        {
            $this->db->select('pestle');
            $this->db->distinct();
            $this->db->from( 'events' );
            // $this->db->limit(2);
            $this->db->where('pestle !=', ''); 

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