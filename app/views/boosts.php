<?php 
$this->layout('template::main', [
    'pageTitle' => 'Statistics',
    'pageDesc' => "...",
]);
?>

<div id="" style="background: #4B878BFF; border-bottom: solid 1px #e0e0e0 !important; border-top: solid 1px #e0e0e0 !important;">
    <div class="container">
        <div class="row">
            <div class="col border-info border-3">
                <div class="fs-1" style="color: #97BC62FF">STANDARD BOOSTS</div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <?php 
            foreach($standardboostdata as $name=>$data) {
        ?>
        <div class="col-md-2 me-4">
            <div class="card" style="width: 13rem; background: #00203FFF;">
                <h5 class="card-header text-white text-center"><?=$name?></h5>
                <img src="<?=App::path($data['Img'])?>" class="img-thumbnail" alt="..." >
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><div class="text-white text-center">Stats</div></th>
                          <th scope="col"><div class="text-white text-center">Attributes</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($data['stats'] as $stats=>$value) {
                        ?>
                        <tr>
                            <td><div class="text-white text-center"><?=$stats?></div></td>
                            <td><div class="text-white text-center"><?=$value?></div></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
         <?php 
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col border-bottom border-info border-3">
            <div class="fs-1" style="color: #97BC62FF">GRAND PRIX BOOSTS</div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <?php 
            foreach($standardboostdata as $name=>$data) {
        ?>
        <div class="col-md-2 me-4">
            <div class="card" style="width: 13rem; background: #00203FFF;">
                <h5 class="card-header text-white text-center"><?=$name?></h5>
                <img src="<?=App::path($data['Img'])?>" class="img-thumbnail" alt="..." >
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><div class="text-white text-center">Stats</div></th>
                          <th scope="col"><div class="text-white text-center">Attributes</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($data['stats'] as $stats=>$value) {
                        ?>
                        <tr>
                            <td><div class="text-white text-center"><?=$stats?></div></td>
                            <td><div class="text-white text-center"><?=$value?></div></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
         <?php 
            }
        ?>
    </div>
</div>
