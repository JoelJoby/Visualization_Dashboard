<?php

    class InsertData extends  CI_Controller 
    {
        function __construct()
        {
            parent::__construct();

			$this->load->model('CommonModel');
        }

        public function index()
        {
            $csvFile = APPPATH . 'uploads/Data.csv';

            // $csvFile = include(APPPATH . 'uploads/Data.csv');

            // echo "CSV File: $csvFile";
            // print_r("Hello");
            // exit;

            if (file_exists($csvFile)) 
            {
                $handle = fopen($csvFile, 'r'); // Open the CSV file for reading.

                //  print_r($handle);exit;       

                if ($handle !== false)  // Check if the file was opened successfully.
                {
                    while (($data = fgetcsv($handle, 1000, ',')) !== false)   // Read the CSV file line by line.
                    {
                        $new_user_data = array(
                            'end_year'    => $data[0],
                            'citylng'     => $data[1],
                            'citylat'     => $data[2],
                            'intensity'   => $data[3],
                            'sector'      => $data[4],
                            'topic'       => $data[5],
                            'insight'     => $data[6],
                            'swot'        => $data[7],
                            'url'         => $data[8],
                            'region'      => $data[9],
                            'start_year'  => $data[10],
                            'impact'      => $data[11],
                            'added'       => $data[12],
                            'published'   => $data[13],
                            'city'        => $data[14],
                            'country'     => $data[15],
                            'relevance'   => $data[16],
                            'pestle'      => $data[17],
                            'source'      => $data[18],
                            'title'       => $data[19],
                            'likelihood'  => $data[20]
                            
                            // Add other user details as needed, e.g., 'name' => $data['name']
                        );

                        // print_r($new_user_data);exit;

                        $this->CommonModel->add_data('events',$new_user_data);  // Insert data into database table.
                    }
                    fclose($handle);
                } 
                
                else 
                {
                    echo "Failed to open the CSV file.";
                }
            } 
            
            else 
            {
                echo "file not found.";
            }

        }	
    }
?>