<?php 
$this->layout('template::main', [
    'pageTitle' => 'Statistics',
    'pageDesc' => "...",
]);
?>

<?php 
    echo '<pre style="max-height:600px; overflow-y: auto; border:1px solid #000;">';
    
    foreach($drivers as $drivername=>$data) {
        echo $drivername . '=>' . $data;
    }

    echo '</pre>';
?>

<div class="container">
    <div class="row">
        <?php 
            foreach($drivers as $drivername=>$data) {
        ?>
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?=$drivername?></h5>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>
        <?php 
            }
        ?>
    </div>
</div>
