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

            $show = $_POST['common'];
            //$headers = array('Drivers', 'Value');
            $date = date('m/d/Y');

            $count = 0;
            foreach($show as $key=>$value) {
                $header[$count]['Driver'] = $key;
                $header[$count]['Value'] = $value;
                $count++;
            }



            //Print the array contents 
            echo '<pre style="max-height:600px; overflow-y: auto; border:1px solid #000;">';

            // foreach($show as $key=>$value){
            //     echo $key ."=>". $value;
            //     echo "<br>";
            //     $headers['Drivers'] = $key;
            //     $headers['Value'] = $value;
            //  }
            // print_r($show);
            // print_r($result); 
            print_r($header);

            echo '</pre>';



            //file name
            $filename = "commons.csv";

            if(isset($_POST['common'])){
                $fp = fopen($filename, 'w');
                foreach($header as $data)
                    fputcsv($fp, $data);
            }
     
            //if file exists, open it and append data to it 
            // if(file_exists($filename)) {
            //     $fp = fopen($filename, 'w');
            //     foreach($show as $key=>$value){
            //         //fputcsv($fp, $value);
            //     }
            // }

            // //create new file, write data to the file
            // else {
            //     //check data from form
            //     if(isset($_POST['common'])){
            //         $fp = fopen($filename, 'w');
            //         fputcsv($fp, $show);
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
    }
}
