<?php
class BoostController {
    public function index() {
              
        $standardboostdata = $this->standardboosts();

        return App::view('boosts', [
            'standardboostdata' => $standardboostdata,
        ]);
    }


    public function standardboosts() {

        $boost = [
            'Self Control' => [
                'stats' => [
                    'Fuel' => 'I',
                    'Tyre' => 'I',
                ],
                'Img' => '/resources/images/standard_boost/self_control.png', 
            ],

            'Warrior' => [
                'stats' => [
                    'Block' => 'I',
                    'Fuel' => 'II',
                    'Overtake' => 'III',
                ],
                'Img' => '/resources/images/standard_boost/warrior.png', 
            ],

            'Ballast' => [
                'stats' => [
                    'Corner' => 'I',
                    'Grip' => 'I',
                    'Wetness' => 'II',
                ],
                'Img' => '/resources/images/standard_boost/ballast.png', 
            ],

            'Instinct' => [
                'stats' => [
                    'Fuel' => 'III',
                    'Overtake' => 'II',
                    'Speed' => 'III',
                ],
                'Img' => '/resources/images/standard_boost/instinct.png', 
            ],

            'Downforce' => [
                'stats' => [
                    'Corner' => 'II',
                    'Grip' => 'II',
                    'Tyre' => 'III',
                ],
                'Img' => '/resources/images/standard_boost/downforce.png', 
            ],

            'Hex' => [
                'stats' => [
                    'Overtake' => 'V',
                    'Speed' => 'IV',
                    'Wetness' => 'I',
                ],
                'Img' => '/resources/images/standard_boost/hex.png', 
            ],
        ];

    return $boost;
    }
}
?>
