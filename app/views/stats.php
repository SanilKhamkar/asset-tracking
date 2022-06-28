<?php 
$this->layout('template::main', [
    'pageTitle' => 'Statistics',
    'pageDesc' => "...",
]);
?>

<div class="container">
    <div class="row mt-3">
        <div class="col border-bottom border-info border-3">
            <p class="fs-1">COMMON DRIVER STATS</p>
        </div>
    </div>

    <div class="row mt-3">
        <?php 
            foreach($drivers as $drivername=>$data) {
                //print_r($data);
        ?>
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title border-bottom border-info border-3"><p class=""><?=$drivername?></p></h5>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col">Stats</th>
                          <th scope="col">Values</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($data['Stats'] as $stats=>$value) {
                        ?>
                        <tr>
                            <td><?=$stats?></td>
                            <td><?=$value?></td>
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
