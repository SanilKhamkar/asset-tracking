<?php
class BoostController {
    public function index() {
              
        $standardboostdata = $this->standardboosts();
        $gpboostdata = $this->gpboosts();

        return App::view('boosts', [
            'standardboostdata' => $standardboostdata,
            'gpboostdata' => $gpboostdata,
        ]);
    }


    public function standardboosts() {

        $standardboost = [
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

        return $standardboost;
    }

    public function gpboosts() {

        $gpboosts = [
            'Unstoppable' => [
                'stats' => [
                    'Fuel' => 'II',
                    'Consistency' => 'I',
                    'Reliability' => 'V',
                ],
                'Img' => '/resources/images/gp_boost/unstoppable.png', 
            ],

            'Eggception' => [
                'stats' => [
                    'Fuel' => 'II',
                    'Speed' => 'IV',
                    'Wetness' => 'III',
                ],
                'Img' => '/resources/images/gp_boost/eggception.png', 
            ],

            'Tune-In' => [
                'stats' => [
                    'Corner' => 'IV',
                    'Wetness' => 'I',
                    'Pit Time' => 'IV',
                ],
                'Img' => '/resources/images/gp_boost/tune-in.png', 
            ],

            'Rooster' => [
                'stats' => [
                    'Block' => 'IV',
                    'Grip' => 'I',
                    'Tyre' => 'IV',
                ],
                'Img' => '/resources/images/gp_boost/rooster.png', 
            ],

            'Prince' => [
                'stats' => [
                    'Block' => 'V',
                    'Corner' => 'II',
                    'Wetness' => 'I',
                ],
                'Img' => '/resources/images/gp_boost/prince.png', 
            ],

            'Djinn' => [
                'stats' => [
                    'Block' => 'III',
                    'Corner' => 'II',
                    'Grip' => 'III',
                ],
                'Img' => '/resources/images/gp_boost/djinn.png', 
            ],

            'Cuppa' => [
                'stats' => [
                    'Overtake' => 'II',
                    'Wetness' => 'V',
                    'Acceleration' => 'I',
                ],
                'Img' => '/resources/images/gp_boost/cuppa.png', 
            ],

            'Eternal Flame' => [
                'stats' => [
                    'Grip' => 'I',
                    'Overtake' => 'V',
                    'Tyre' => 'II',
                ],
                'Img' => '/resources/images/gp_boost/eternal_flame.png', 
            ],

            'Taurus' => [
                'stats' => [
                    'Corner' => 'I',
                    'Fuel' => 'II',
                    'Tyre' => 'V',
                ],
                'Img' => '/resources/images/gp_boost/taurus.png', 
            ],

            'Lumberjack' => [
                'stats' => [
                    'Overtake' => 'IV',
                    'Speed' => 'IV',
                    'Tyre' => 'I',
                ],
                'Img' => '/resources/images/gp_boost/lumberjack.png', 
            ],

            'Gladiator' => [
                'stats' => [
                    'Block' => 'III',
                    'Fuel' => 'II',
                    'Speed' => 'IV',
                ],
                'Img' => '/resources/images/gp_boost/gladiator.png', 
            ],

            'DeadFast' => [
                'stats' => [
                    'Fuel' => 'II',
                    'Speed' => 'V',
                    'Tyre' => 'I',
                ],
                'Img' => '/resources/images/gp_boost/deadfast.png', 
            ],
        ];

        return $gpboosts;
    }
}
?>
