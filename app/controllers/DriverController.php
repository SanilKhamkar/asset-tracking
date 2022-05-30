<?php
class DriverController {
    public function index() {
              
        $drivers = $this->alldrivers();

        return App::view('home', [
            'drivers' => $drivers,
            'pageTitle' => 'Home',
        ]);
    }

<<<<<<< HEAD
    public function driversnames() {
=======
    public function alldrivers() {
>>>>>>> dev
        $driverarray = ['Zhou', 'Magnussen', 'Albon', 'Schumacher', 'Stroll', 'Tsunoda', 'Ocon', 'Vettel', 'Latifi', 'Verstappen', 'Hamilton', 'Norris', 'Riccardo', 'Russel', 'Sainz', 'Leclerc', 'Bottas', 'Perez', 'Gasly', 'Alonso'];

        return $driverarray;
    }
<<<<<<< HEAD

    //write data to csv
    public function writedata() {

        $filename = "commons.csv";

        //check if file exists
        if(file_exists($filename)) {
            $data = $this->readdata($filename);
        }
        else {

        }
    }

    //read data from csv
    public function readdata() {
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 30000, ",")) !==false)
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

=======
>>>>>>> dev
}