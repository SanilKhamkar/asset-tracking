<?php
class BoostController {
    public function index() {
              
       

        return App::view('boosts', [
            
        ]);
    }


    public function standardboosts() {

        $boost = [
            'Self Control' => [
                'Fuel' => 'I',
                'Tyre' => 'I',
                ''
            ],

        ];
    }
}
?>