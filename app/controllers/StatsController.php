<?php
class StatsController {
    public function index() {
              
       $driverdata = $this->driverstats();

        return App::view('stats', [
            'drivers' => $driverdata,
        ]);
    }

    public function driverstats () {

        $commons = [
            'Zhou' => [
                'Rarity' => 'Common Series 1',
                'Stats' => [
                    'Overtaking' => '12',
                    'Defending' => '7',
                    'Consistency' => '11',
                    'Fuel' => '9',
                    'Tyre' => '5',
                    'Wetness' => '3', 
                ],
            ],

            'Kevin' => [
                'Rarity' => 'Common Series 1',
                'Stats' => [
                    'Overtaking' => '9',
                    'Defending' => '13',
                    'Consistency' => '4',
                    'Fuel' => '11',
                    'Tyre' => '7',
                    'Wetness' => '5', 
                ],
            ],
        ];

        return $commons;
    }




}
?>