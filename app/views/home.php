<?php 
$this->layout('template::main', [
    'pageTitle' => 'Noob',
    'pageDesc' => "...",
]);
?>

<nav class="navbar navbar-expand-lg navbar-light" style="color: #cdd7e1; background: #4879b3; box-shadow: inset 100px 0px 100px -50px #062e71, inset -100px 0px 100px -50px #062e71; width: 100%;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"  style="color: #8ec63f">DRIVERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #cdd7e1">COMPONENTS</a>
        </li>
      </ul>
      <span class="navbar-text" style="color: #cdd7e1"> 
        ASSET TRACKING F1 CLASH
      </span>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 border">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header text-center" style="background: #98dbed">COMMON DRIVERS</div>
                <div class="card-body shadow-sm text-white bg-dark">
                    <h5 class="card-title">INPUT YOUR CURRENT ASSESTS</h5>
                </div>

            
                <form class="needs-validation" action="<?= App::path('/home') ?>" method="get" novalidate>
                <?php
                    foreach($drivers as $value) {
                ?>
                    <div class="card-body">
                        <div class="row">
                            <label for="inputPassword" class="col-sm-6 col-form-label"><?=$value?></label>
                            <div class="col-sm-6">
                                <input class="form-control" value="0" type="text" placeholder="Default input" aria-label="default input example">
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                ?>
                <button type="submit" class="btn btn-primary mt-3">Search</button>
                </form>
            </div>
        </div>

        <div class="col-md-6 border">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thread>
                        <tr style="background: #4879b3; color: #cdd7e1">
                            <th scope="col">Drivers</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thread>         
                    <?php    
                        foreach($drivers as $value) {
                    ?>
                    <tbody>
                        <tr>
                            <td><label for="inputPassword" class="col-sm-6 col-form-label"><?=$value?></label></td>
                            <td><input class="form-control" value="0" type="text" placeholder="Default input" aria-label="default input example"></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
