<?php

    class InsertData extends  CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $csvFile = include(APPPATH . 'uploads/Data.csv');

            // echo "CSV File: $csvFile";
            // print_r($csvFile);
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
                            'end_year'    => $data[1],
                            'citylng'     => $data[2],
                            'citylat'     => $data[3],
                            'intensity'   => $data[4],
                            'sector'      => $data[5],
                            'topic'       => $data[6],
                            'insight'     => $data[7],
                            'swot'        => $data[8],
                            'url'         => $data[9],
                            'region'      => $data[10],
                            'start_year'  => $data[11],
                            'impact'      => $data[12],
                            'added'       => $data[13],
                            'published'   => $data[14],
                            'city'        => $data[15],
                            'country'     => $data[16],
                            'relevance'   => $data[17],
                            'pestle'      => $data[18],
                            'source'      => $data[19],
                            'title'       => $data[20],
                            'likelihood'  => $data[21]

                            // Add other user details as needed, e.g., 'name' => $data['name']
                        );
                        print_r($new_user_data);exit;

                        $this->commonModel->add_data('events',$new_user_data);  // Insert data into database table.
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