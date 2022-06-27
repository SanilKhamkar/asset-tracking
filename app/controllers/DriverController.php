<?php
class DriverController {
    public function index() {
              
        $drivers = $this->alldrivers();

        $driverdata = $this->writedata();

        return App::view('home', [
            'drivers' => $drivers,
            'pageTitle' => 'Home',
        ]);
    }

    public function alldrivers() {
        $driverarray = ['Zhou', 'Magnussen', 'Albon', 'Schumacher', 'Stroll', 'Tsunoda', 'Ocon', 'Vettel', 'Latifi', 'Verstappen', 'Hamilton', 'Norris', 'Riccardo', 'Russel', 'Sainz', 'Leclerc', 'Bottas', 'Perez', 'Gasly', 'Alonso'];

        return $driverarray;
    }

    //write data to csv
    public function writedata() {

        //test data
        //check if data is posted and not empty 
        if(isset($_POST['common']) && !empty($_POST['common'])){

            //file name
            $filename = "commons.csv";

            $show = $_POST['common'];
            $headers = array('Drivers', 'Value');
            //$date = date('m/d/Y');

            $count = 0;
            // foreach($show as $key=>$value) {
            //     $data[$count]['Driver'] = $key;
            //     $data[$count]['Value'] = $value;
            //     $count++;
            // }           

            // echo '<pre style="max-height:600px; overflow-y: auto; border:1px solid #000;">';
            // print_r($data);
            // echo '</pre>';

            //read data from csv
            $csvdata = $this->readdata($filename);

            print_r($csvdata);

            //check if data is being posted and file exists
            // if(isset($_POST['common']) && file_exists($filename)){
            //     if(file_exists($filename)) {
            //         echo "File Exists. Writing data to file";
            //         $fp = fopen($filename, 'w');
            //         fputcsv($fp, $headers);
            //         foreach($data as $asset) {
            //             fputcsv($fp, $asset);
            //         }
            //         fclose($fp);
            //     }
            // }

            //create new file, write data to the file
            // else {
            //     //check data from form
            //     if(isset($_POST['common'])){                    
            //         $fp = fopen($filename, 'w');
            //         echo "Creating new file. Writing data to file";
            //         fputcsv($fp, $headers);
            //         foreach($data as $asset){
            //             fputcsv($fp, $asset);
            //         }
            //         fclose($fp);
            //     }
            // }
        }
    }

    //read data from csv
    public function readdata($filename) {
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 30000, ",")) !== false)
            {
                if(!$header) {
                    $header = $row;
                }
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
