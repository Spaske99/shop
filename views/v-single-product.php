<div class="bg-image" style="background-image: url('./public/theme/img/wallpapers/wallpaper.jpg'); background-repeat: no-repeat; background-attachment: fixed; ">
    <main>
        <div class="container pt-5">
            <div class="row">
                <div class="col-5 mb-5">
                    <img src="<?php echo htmlspecialchars($product->img); ?>" class="card-img-top" alt="...">
                </div>        
                <div class="col-6 mt-2 text-white">
                    <h1 class="card-title mb-4 mt-3"><?php echo htmlspecialchars($product->title); ?></h1>
                    <hr class="mt-3">
                    <p><strong>About game:</strong> <?php echo htmlspecialchars($product->description); ?></p>
                    <p><strong>Type:</strong> <?php echo htmlspecialchars($product->type); ?></p>
                    <h3><strong>Price: </strong><?php echo htmlspecialchars($product->price); ?> $</h3>
                    <?php
                    for($i=0; $i<($product->stars); $i++) {
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
                    <div class="mb-3 mt-3">
                        <form action="./checkout_page_controler.php" method="get">
                            <label for="quantity" class="form-label">Quantity: </label>
                            <div class="col-9">
                                <input name="quantity" type="number" class="form-control " id="quantity" placeholder="Quantity" step="1" value="1" min="1" required />
                            </div>
                            <div class="col-6">
                                <input type="hidden" name="id" value=<?php echo htmlspecialchars($product->id); ?> />
                                <button type="submit" class="btn btn-primary col-8 mt-2">BUY</button>
                            </div>
                        <form>
                    </div>
                    <div class="col-6 bac">
                        <a class="btn btn-outline-secondary previous-and-next" href="./single-product-page.php?page=<?php echo htmlspecialchars($product->getPrevProductId()); ?>"><</a>
                        <a class="btn btn-outline-secondary previous-and-next" href="./single-product-page.php?page=<?php echo htmlspecialchars($product->getNextProductId()); ?>">></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row mb-5 mt-4 text-white">
                    <div class='col-4'>
                        <img src="<?php echo htmlspecialchars($singleRelated->img); ?>" alt="" width="120">
                    </div>
                    <div class='col-8 mt-3'>
                        <h4><?php echo htmlspecialchars($singleRelated->title) . "<br>"; ?></h4>
                        <p><?php echo htmlspecialchars($singleRelated->price) . " $<br>"; ?></p>
                        <a class="btn btn-primary" href="./single-product-page.php?page=<?php echo htmlspecialchars($singleRelated->id); ?>">Show Product</a>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </main>
</div>