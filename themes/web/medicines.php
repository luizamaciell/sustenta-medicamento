<?php
$this->layout("_theme");
?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?= url() ?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Fármacia</strong></div>
        </div>
      </div>
    </div>
    
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
            <div id="slider-range" class="border-primary"></div>
          </div>
          <div class="col-lg-6 text-lg-right">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter</h3>
            <button type="button" class="btn btn-primary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="#">Relevance</a>
              <a class="dropdown-item" href="#">Name, A to Z</a>
              <a class="dropdown-item" href="#">Name, Z to A</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Price, low to high</a>
              <a class="dropdown-item" href="#">Price, high to low</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        
        
    
        <div class="row">

        <?php foreach($medicines as $medicine){ ?>

          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">New</span>
            <a href="shop-single.html"> <img src= "<?=url()?><?= $medicine->link; ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html"><?= $medicine->name; ?></a></h3>
            <p class="price"><?= $medicine->description; ?></p>
          </div>

          <?php } ?>

      </div>
    </div>