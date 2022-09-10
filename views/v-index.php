<main>
    <section class="mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./single-product-page.php?page=65">
                        <img src="./public/theme/img/wallpapers/horizon.png" class="d-block w-100" alt="WALL">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./single-product-page.php?page=2">
                        <img src="./public/theme/img/wallpapers/assinsscreed.jpg" class="d-block w-100" alt="WALL">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.fallguys.com/en-US">
                        <img src="./public/theme/img/wallpapers/fallguys.jpg" class="d-block w-100" alt="WALL">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="my-5">
        <div class="mb-5">
            <h2 class="text-center text-white">Most popular product</h2>
        </div>         
        <div class="container mb-5 mt-5">
            <div class="row">
                <?php foreach ($popular as $singlePopular) { ?>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-3">
                        <div class="card mt-3">
                            <div class="product-1 align-items-center pt-3 text-center">
                                <a href="./single-product-page.php?page=<?php echo $singlePopular->id ?>">
                                    <img src="<?php echo $singlePopular->img ?>" class="d-block w-100" alt="WALL" class="rounded">
                                </a>
                                <h4 class="mt-2 index-title"><?php echo $singlePopular->title ?></h4>
                                <div class="mt-3 info">                      
                                </div>
                                    <div class="cost mt-3 text-dark">
                                        <h6 class="price"><?php echo $singlePopular->price . " $"; ?></h6>
                                        <div class="star mt-3 align-items-center">
                                        <?php
                                        for($i=0; $i<($singlePopular->stars); $i++) {
                                        ?>
                                        <i class="fa fa-star text-warning"></i>
                                        <?php
                                        }
                                        for($j=0; $j<(5 - $i); $j++) {
                                        ?>
                                        <i class="fa fa-star"></i>
                                        <?php
                                        }
                                        ?>
                                    </div>    
                                </div>
                            </div>
                            <div class="p-3 shoe text-center text-white mt-2 cursor">
                                <a href="./single-product-page.php?page=<?php echo $singlePopular->id ?>">
                                    <button form="add-to-cart-<?php echo htmlspecialchars($singlePopular->id); ?>" class="btn btn-outline-danger">See More</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>   
        </div>
    </section>
    <div class="my-5">
        <img src="./public/theme/img/wallpapers/hits.jpg" class="d-block w-100" alt="WALL">
    <div>
    <section class="my-5">
        <div class="mb-5">
            <h2 class="text-center text-white">PlayStation®5 accessories</h2>
            <p class="text-center text-white">Push the boundaries of play with the new generation of PlayStation® accessories.</p>
        </div>            
    </section>
    <div class="container my-5 pb-5">
        <img src="./public/theme/img/wallpapers/accessories.png" class="d-block w-100" alt="WALL">
        <div class="text-center">
            <button type="button" class="btn btn-outline-danger">Find in store</button>
        <div>
    <div>
</main>