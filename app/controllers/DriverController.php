<?php
class DriverController {
    public function index() {
              
        $drivers = $this->alldrivers();

        return App::view('home', [
            'drivers' => $drivers,
            'pageTitle' => 'Home',
        ]);
    }

    public function alldrivers() {
        $driverarray = ['Zhou', 'Magnussen', 'Albon', 'Schumacher', 'Stroll', 'Tsunoda', 'Ocon', 'Vettel', 'Latifi', 'Verstappen', 'Hamilton', 'Norris', 'Riccardo', 'Russel', 'Sainz', 'Leclerc', 'Bottas', 'Perez', 'Gasly', 'Alonso'];

        return $driverarray;
    }
}