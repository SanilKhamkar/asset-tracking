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

        $filename = "commons.csv";
 
        //if file exists, open it and append data to it 
        if(file_exists($filename)) {
            $data = $this->readdata($filename);
        }
        //create new file, write data to the file
        else {
            //check data from form
            if(isset($_POST['common_drivers'])){
                $fp = fopen($filename, 'w');
                fputcsv($fp, $_POST['common_drivers']);
            }
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
    }
}
